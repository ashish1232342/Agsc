<?php
$razorpay_key_id = 'rzp_test_yourkeyid'; // Replace with your Razorpay key ID
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Book a Service - Cyber Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <?php include('navbar.php'); ?>

  <main class="max-w-4xl mx-auto p-6 pt-28">

    <section class="bg-white rounded-lg shadow p-10">
      <h1 class="text-4xl font-bold mb-6 text-blue-700 text-center">Book a Service</h1>
      <form id="serviceForm" class="space-y-6" onsubmit="return false;">

        <div>
          <label for="name" class="block font-semibold mb-2 text-gray-700">Name</label>
          <input type="text" id="name" name="name" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
          <label for="email" class="block font-semibold mb-2 text-gray-700">Email</label>
          <input type="email" id="email" name="email" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
          <label for="service" class="block font-semibold mb-2 text-gray-700">Select Service</label>
          <select id="service" name="service" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="" disabled selected>Select a service</option>
            <option value="Internet Access" data-price="50">Internet Access - ₹50/hour</option>
            <option value="Gaming PC" data-price="150">Gaming PC - ₹150/hour</option>
            <option value="Printing" data-price="10">Printing - ₹10/page</option>
          </select>
        </div>

        <div>
          <label for="quantity" class="block font-semibold mb-2 text-gray-700">Hours / Quantity</label>
          <input type="number" id="quantity" name="quantity" min="1" value="1" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="text-lg font-semibold text-gray-900">
          Total Price: ₹<span id="totalPrice">0</span>
        </div>

        <button type="button" id="payButton" disabled
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded transition disabled:opacity-50 disabled:cursor-not-allowed">
          Pay Now
        </button>
      </form>
    </section>

  </main>

  <?php include('footer.php'); ?>

  <script>
    const serviceSelect = document.getElementById('service');
    const quantityInput = document.getElementById('quantity');
    const totalPriceSpan = document.getElementById('totalPrice');
    const payButton = document.getElementById('payButton');

    function calculatePrice() {
      const selectedOption = serviceSelect.options[serviceSelect.selectedIndex];
      const pricePerUnit = selectedOption ? parseInt(selectedOption.getAttribute('data-price')) : 0;
      const quantity = parseInt(quantityInput.value) || 0;
      const total = pricePerUnit * quantity;
      totalPriceSpan.textContent = total > 0 ? total : 0;
      payButton.disabled = total <= 0 || !serviceSelect.value || !quantity;
      return total;
    }

    serviceSelect.addEventListener('change', calculatePrice);
    quantityInput.addEventListener('input', calculatePrice);

    payButton.addEventListener('click', () => {
      const totalAmount = calculatePrice();
      if (totalAmount <= 0) {
        alert('Please select a valid service and quantity.');
        return;
      }

      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const service = serviceSelect.value;
      const quantity = quantityInput.value;

      if (!name || !email || !service || !quantity) {
        alert('Please fill all fields correctly.');
        return;
      }

      const options = {
        "key": "<?php echo $razorpay_key_id; ?>",
        "amount": totalAmount * 100, // in paise
        "currency": "INR",
        "name": "Cyber Cafe",
        "description": "Service Payment",
        "handler": function (response){
          // Send payment + booking info to backend verify script
          const data = {
            razorpay_payment_id: response.razorpay_payment_id,
            name: name,
            email: email,
            service: service,
            quantity: quantity,
            amount: totalAmount
          };

          fetch('payment_verify.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: new URLSearchParams(data)
          })
          .then(res => res.json())
          .then(data => {
            alert(data.message);
            if(data.status === 'success'){
              // Redirect to thank you page with booking info
              window.location.href = `thankyou.php?name=${encodeURIComponent(name)}&service=${encodeURIComponent(service)}&quantity=${quantity}&amount=${totalAmount}`;
            }
          })
          .catch(() => {
            alert('Something went wrong. Please contact support.');
          });
        },
        "prefill": {
          "name": name,
          "email": email,
        },
        "theme": {
          "color": "#2563eb"
        }
      };
      const rzp = new Razorpay(options);
      rzp.open();
    });

    // Initialize price on page load
    calculatePrice();
  </script>

</body>
</html>
