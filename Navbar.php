<!-- Navbar -->
<nav class="bg-white shadow-md fixed top-0 w-full z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <div class="flex items-center space-x-3">
        <img src="public/logo.png" alt="Logo" class="h-10 w-10 rounded-full">
        <span class="text-xl font-bold text-blue-700">Cyber Cafe</span>
      </div>
      <div class="hidden md:flex space-x-6">
        <a href="index.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Home</a>
        <a href="about.php" class="text-gray-700 hover:text-blue-600 font-medium transition">About</a>
        <a href="contact.php" class="text-gray-700 hover:text-blue-600 font-medium transition">Contact</a>
        <a href="servicebook.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Book Now</a>
      </div>
      <div class="md:hidden flex items-center">
        <button id="menu-btn" class="text-gray-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
    <a href="index.php" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
    <a href="about.php" class="block py-2 text-gray-700 hover:text-blue-600">About</a>
    <a href="contact.php" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a>
    <a href="servicebook.php" class="block py-2 bg-blue-600 text-white text-center rounded hover:bg-blue-700">Book Now</a>
  </div>
</nav>

<!-- Add padding to push content below navbar -->
<div class="pt-20"></div>

<!-- JS for mobile menu toggle -->
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>
