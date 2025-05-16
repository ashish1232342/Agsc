<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home - Cyber Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <?php include('navbar.php'); ?>

  <main class="max-w-7xl mx-auto p-6 pt-28">

    <!-- Hero Section -->
    <section class="text-center py-16 bg-gradient-to-r from-blue-600 to-blue-400 text-white rounded-lg shadow-lg mb-12">
      <h1 class="text-5xl font-extrabold mb-4">Welcome to Cyber Cafe</h1>
      <p class="text-xl max-w-2xl mx-auto mb-6">
        Your one-stop destination for fast internet, gaming, printing, and more!
      </p>
      <a href="servicebook.php" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-8 rounded shadow-lg transition">
        Book a Service Now
      </a>
    </section>

    <!-- Stats Section -->
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center mb-12">
      <div class="bg-white rounded-lg shadow py-10">
        <div class="text-5xl font-extrabold text-blue-600 mb-2">1200+</div>
        <div class="text-gray-600 font-semibold">Total Customers</div>
      </div>
      <div class="bg-white rounded-lg shadow py-10">
        <div class="text-5xl font-extrabold text-blue-600 mb-2">35+</div>
        <div class="text-gray-600 font-semibold">Services Offered</div>
      </div>
      <div class="bg-white rounded-lg shadow py-10">
        <div class="text-5xl font-extrabold text-blue-600 mb-2">15</div>
        <div class="text-gray-600 font-semibold">Years of Experience</div>
      </div>
    </section>

    <!-- Features / Services Section -->
    <section class="mb-16">
      <h2 class="text-3xl font-bold text-center mb-10">Our Services</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow p-8 text-center">
          <h3 class="text-xl font-semibold mb-2">High-Speed Internet</h3>
          <p class="text-gray-600">Lightning fast connection for all your browsing and gaming needs.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-8 text-center">
          <h3 class="text-xl font-semibold mb-2">Gaming Zone</h3>
          <p class="text-gray-600">Top-tier gaming PCs and consoles with comfortable seating.</p>
        </div>
        <div class="bg-white rounded-lg shadow p-8 text-center">
          <h3 class="text-xl font-semibold mb-2">Printing & Scanning</h3>
          <p class="text-gray-600">Affordable document services with quick turnaround.</p>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-5xl mx-auto text-center">
        <h3 class="text-3xl font-bold mb-12">What Our Customers Say</h3>
        <div class="grid md:grid-cols-3 gap-10">
          <div class="bg-white p-8 rounded-lg shadow-lg">
            <p class="italic text-gray-700">"Fast internet and great gaming setup. I visit almost every weekend!"</p>
            <div class="mt-6 font-semibold text-blue-600">— Raj Patel</div>
          </div>
          <div class="bg-white p-8 rounded-lg shadow-lg">
            <p class="italic text-gray-700">"Printed my college documents quickly. Staff is helpful and friendly."</p>
            <div class="mt-6 font-semibold text-blue-600">— Ayesha Khan</div>
          </div>
          <div class="bg-white p-8 rounded-lg shadow-lg">
            <p class="italic text-gray-700">"They helped me apply for government jobs online. Very supportive."</p>
            <div class="mt-6 font-semibold text-blue-600">— Ravi Sharma</div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include('footer.php'); ?>

</body>
</html>
