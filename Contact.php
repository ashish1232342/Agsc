<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Cyber Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <?php include('navbar.php'); ?>

  <main class="max-w-3xl mx-auto p-6 pt-28">

    <section class="bg-white rounded-lg shadow p-10">
      <h1 class="text-4xl font-bold mb-6 text-blue-700 text-center">Get in Touch</h1>
      <p class="mb-6 text-center text-gray-700">
        Have questions or want to book a service? Fill out the form below and we’ll get back to you shortly.
      </p>

      <form id="contactForm" action="contact_process.php" method="POST" class="space-y-6">
        <div>
          <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
          <input type="text" id="name" name="name" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
          <input type="email" id="email" name="email" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label for="subject" class="block text-gray-700 font-semibold mb-2">Subject</label>
          <input type="text" id="subject" name="subject" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>
        <div>
          <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
          <textarea id="message" name="message" rows="5" required
            class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 resize-none"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded transition">
          Send Message
        </button>
      </form>
    </section>

  </main>

  <?php include('footer.php'); ?>

  <script>
    // Simple client-side form validation
    document.getElementById('contactForm').addEventListener('submit', function(event) {
      const name = this.name.value.trim();
      const email = this.email.value.trim();
      const subject = this.subject.value.trim();
      const message = this.message.value.trim();

      if (!name || !email || !subject || !message) {
        alert('Please fill in all fields.');
        event.preventDefault();
        return;
      }

      // Basic email format check
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        event.preventDefault();
        return;
      }
    });
  </script>

</body>
</html>
