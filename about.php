<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Cyber Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Simple toggle for FAQ */
    .faq-answer {
      display: none;
    }
    .faq-question.active + .faq-answer {
      display: block;
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

  <?php include('navbar.php'); ?>

  <main class="max-w-6xl mx-auto p-6 pt-28">

    <section class="bg-white rounded-lg shadow p-10 mb-12">
      <h1 class="text-4xl font-bold mb-6 text-center text-blue-700">About Cyber Cafe</h1>
      <p class="text-lg leading-relaxed mb-4">
        Cyber Cafe has been serving the community with high-speed internet, gaming facilities, and printing services since 2010. Our mission is to provide a comfortable and tech-friendly environment where customers can work, study, game, and connect with the world.
      </p>
      <p class="text-lg leading-relaxed mb-4">
        We pride ourselves on our friendly staff, reliable equipment, and affordable pricing. Whether you're here to print documents, browse the web, or compete in online games, Cyber Cafe is your go-to place.
      </p>
      <p class="text-lg leading-relaxed">
        Our vision is to continually upgrade our technology and services to keep pace with the latest trends, ensuring every visit is a great experience.
      </p>
    </section>

    <!-- Mission & Vision -->
    <section class="grid md:grid-cols-2 gap-10 mb-12">
      <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
        <svg class="w-16 h-16 text-blue-600 mb-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 2l9 7-9 7-9-7 9-7z"/><path d="M12 22v-10"/></svg>
        <h2 class="text-2xl font-semibold mb-2">Our Mission</h2>
        <p class="text-gray-700">To deliver fast, reliable internet and tech services in a welcoming environment.</p>
      </div>
      <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
        <svg class="w-16 h-16 text-blue-600 mb-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        <h2 class="text-2xl font-semibold mb-2">Our Vision</h2>
        <p class="text-gray-700">To be the community's most trusted hub for technology and connectivity.</p>
      </div>
    </section>

    <!-- Timeline -->
    <section class="mb-12">
      <h2 class="text-3xl font-bold text-center mb-8 text-blue-700">Our Journey</h2>
      <ol class="relative border-l border-gray-300 max-w-4xl mx-auto">
        <li class="mb-10 ml-6">
          <span class="absolute flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full -left-4 top-1">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"/></svg>
          </span>
          <h3 class="font-semibold text-lg text-blue-600">2010 - Founded</h3>
          <p class="text-gray-700">Started as a small internet kiosk with a single computer.</p>
        </li>
        <li class="mb-10 ml-6">
          <span class="absolute flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full -left-4 top-1">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 20v-16m8 8H4"/></svg>
          </span>
          <h3 class="font-semibold text-lg text-blue-600">2015 - Expanded Services</h3>
          <p class="text-gray-700">Introduced gaming zone and printing services.</p>
        </li>
        <li class="mb-10 ml-6">
          <span class="absolute flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full -left-4 top-1">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg>
          </span>
          <h3 class="font-semibold text-lg text-blue-600">2023 - Modernization</h3>
          <p class="text-gray-700">Upgraded all equipment for high-speed fiber internet and gaming PCs.</p>
        </li>
      </ol>
    </section>

    <!-- FAQ Preview -->
    <section class="mb-16 max-w-4xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8 text-blue-700">Frequently Asked Questions</h2>
      <div>
        <button class="faq-question w-full text-left p-4 bg-white border border-gray-300 rounded-t-lg font-semibold focus:outline-none">
          What are your operating hours?
        </button>
        <div class="faq-answer p-4 border border-t-0 border-gray-300 bg-gray-50 rounded-b-lg">
          We are open daily from 8 AM to 10 PM.
        </div>

        <button class="faq-question w-full text-left p-4 bg-white border border-gray-300 mt-4 rounded-t-lg font-semibold focus:outline-none">
          Do you offer hourly and daily packages?
        </button>
        <div class="faq-answer p-4 border border-t-0 border-gray-300 bg-gray-50 rounded-b-lg">
          Yes, we have flexible packages depending on your needs. Check our Services page for details.
        </div>

        <button class="faq-question w-full text-left p-4 bg-white border border-gray-300 mt-4 rounded-t-lg font-semibold focus:outline-none">
          Is printing available onsite?
        </button>
        <div class="faq-answer p-4 border border-t-0 border-gray-300 bg-gray-50 rounded-b-lg">
          Absolutely, we offer color and black & white printing along with scanning services.
        </div>
      </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="bg-blue-600 text-white rounded-lg p-10 text-center mb-16">
      <h2 class="text-3xl font-bold mb-4">Ready to Experience Cyber Cafe?</h2>
      <p class="mb-6 text-lg max-w-xl mx-auto">Contact us today or book a service to enjoy the best internet and tech services in town!</p>
      <a href="contact.php" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-8 rounded shadow-lg transition">
        Contact Us
      </a>
      <a href="servicebook.php" class="inline-block bg-gray-900 hover:bg-gray-800 text-white font-bold py-3 px-8 rounded shadow-lg ml-4 transition">
        Book a Service
      </a>
    </section>

  </main>

  <?php include('footer.php'); ?>

  <script>
    // FAQ toggle script
    document.querySelectorAll('.faq-question').forEach(btn => {
      btn.addEventListener('click', () => {
        btn.classList.toggle('active');
      });
    });
  </script>

</body>
</html>
