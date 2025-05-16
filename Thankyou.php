<?php
$name = htmlspecialchars($_GET['name'] ?? 'Valued Customer');
$service = htmlspecialchars($_GET['service'] ?? 'Service');
$quantity = intval($_GET['quantity'] ?? 1);
$amount = intval($_GET['amount'] ?? 0);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Thank You - Cyber Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <?php include('navbar.php'); ?>

  <main class="max-w-3xl mx-auto p-6 pt-28 text-center">

    <div class="bg-white rounded-lg shadow p-10">
      <h1 class="text-5xl font-bold text-green-600 mb-6">Thank You, <?php echo $name; ?>!</h1>
      <p class="text-lg mb-4">Your booking has been confirmed.</p>
      <p class="mb-2"><strong>Service:</strong> <?php echo $service; ?></p>
      <p class="mb-2"><strong>Quantity:</strong> <?php echo $quantity; ?></p>
      <p class="mb-4"><strong>Total Paid:</strong> ₹<?php echo $amount; ?></p>
      <p class="mb-6">We look forward to serving you at Cyber Cafe.</p>

      <a href="index.php"
         class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded transition">
        Go to Home
      </a>
    </div>

  </main>

  <?php include('footer.php'); ?>

</body>
</html>
