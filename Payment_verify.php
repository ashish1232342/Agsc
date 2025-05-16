<?php
require 'vendor/autoload.php'; // Razorpay SDK

use Razorpay\Api\Api;

$razorpay_key_id = 'rzp_test_yourkeyid';
$razorpay_key_secret = 'rzp_test_yoursecret';

$input = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if (!isset($input['razorpay_payment_id'], $input['name'], $input['email'], $input['service'], $input['quantity'], $input['amount'])) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
    exit;
}

$api = new Api($razorpay_key_id, $razorpay_key_secret);

$payment_id = $input['razorpay_payment_id'];

try {
    $payment = $api->payment->fetch($payment_id);

    if ($payment->status == 'captured') {
        // Save booking to DB
        $pdo = new PDO('mysql:host=localhost;dbname=your_db;charset=utf8', 'db_user', 'db_pass');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO bookings 
            (name, email, service, quantity, amount, payment_id, payment_status) 
            VALUES (:name, :email, :service, :quantity, :amount, :payment_id, :payment_status)");

        $stmt->execute([
            ':name' => $input['name'],
            ':email' => $input['email'],
            ':service' => $input['service'],
            ':quantity' => (int)$input['quantity'],
            ':amount' => (int)$input['amount'],
            ':payment_id' => $payment_id,
            ':payment_status' => $payment->status
        ]);

        echo json_encode(['status' => 'success', 'message' => 'Payment verified and booking saved']);
    } else {
        echo json_encode(['status' => 'failed', 'message' => 'Payment not captured']);
    }

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
