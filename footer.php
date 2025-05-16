<?php
// PHP part to get user IP as fallback for JS
function getUserIP() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    return $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
  } else {
    return $_SERVER['REMOTE_ADDR'];
  }
}
$userIP = getUserIP();
?>

<footer class="bg-gray-900 text-gray-300 py-10 mt-16">
  <div class="container mx-auto px-6">
    <div class="flex flex-col md:flex-row md:justify-between md:items-center space-y-6 md:space-y-0">

      <!-- Left: Current IP -->
      <div>
        <h4 class="text-white font-semibold mb-2">Your IP Address</h4>
        <p id="ipAddress" class="text-sm select-text"><?= htmlspecialchars($userIP) ?></p>
      </div>

      <!-- Center: Quick Links -->
      <div>
        <h4 class="text-white font-semibold mb-2">Quick Links</h4>
        <ul class="flex flex-wrap gap-4">
          <li><a href="index.php" class="hover:text-yellow-400 transition">Home</a></li>
          <li><a href="terms.php" class="hover:text-yellow-400 transition">Terms & Conditions</a></li>
          <li><a href="faq.php" class="hover:text-yellow-400 transition">FAQ</a></li>
          <li><a href="refund.php" class="hover:text-yellow-400 transition">Refund Policy</a></li>
          <li><a href="contact.php" class="hover:text-yellow-400 transition">Contact</a></li>
        </ul>
      </div>

      <!-- Right: Social Media -->
      <div>
        <h4 class="text-white font-semibold mb-2">Follow Us</h4>
        <div class="flex space-x-4">
          <a href="https://facebook.com/yourpage" target="_blank" rel="noopener" aria-label="Facebook" class="hover:text-blue-600 transition">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2c0-2 1-3 3-3h2v3h-2a1 1 0 00-1 1v2h3l-1 3h-2v7A10 10 0 0022 12z"/></svg>
          </a>
          <a href="https://twitter.com/yourhandle" target="_blank" rel="noopener" aria-label="Twitter" class="hover:text-blue-400 transition">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14.86 5.48 5.48 0 002.4-3 10.92 10.92 0 01-3.48 1.3 5.46 5.46 0 00-9.3 4.98A15.5 15.5 0 012 4.9a5.46 5.46 0 001.69 7.28 5.37 5.37 0 01-2.48-.68v.07a5.46 5.46 0 004.38 5.35 5.4 5.4 0 01-2.46.1 5.46 5.46 0 005.1 3.78A10.94 10.94 0 012 19.54a15.47 15.47 0 008.39 2.46c10.06 0 15.57-8.34 15.57-15.57 0-.24 0-.47-.02-.7A11.2 11.2 0 0023 3z"/></svg>
          </a>
          <a href="https://instagram.com/yourhandle" target="_blank" rel="noopener" aria-label="Instagram" class="hover:text-pink-600 transition">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M7 2C4.8 2 3 3.8 3 6v12c0 2.2 1.8 4 4 4h10c2.2 0 4-1.8 4-4V6c0-2.2-1.8-4-4-4H7zm7 4a1 1 0 110 2 1 1 0 010-2zm-5 1a5 5 0 105 5 5 5 0 00-5-5zm0 8a3 3 0 113-3 3 3 0 01-3 3z"/></svg>
          </a>
          <a href="https://linkedin.com/in/yourprofile" target="_blank" rel="noopener" aria-label="LinkedIn" class="hover:text-blue-700 transition">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M4 3a2 2 0 100 4 2 2 0 000-4zm0 5h4v12H4zm7-5h4v2.5a4.5 4.5 0 014 4.5v5H15v-5a1.5 1.5 0 00-3 0v5h-4V8z"/></svg>
          </a>
        </div>
      </div>

    </div>

    <hr class="my-8 border-gray-700">

    <p class="text-center text-sm text-gray-500">&copy; <?= date("Y") ?> Cyber Cafe. All rights reserved.</p>
  </div>

  <script>
    // JS to update IP dynamically (try fetch from API, fallback to PHP)
    async function fetchIP() {
      try {
        const res = await fetch('https://api.ipify.org?format=json');
        if (!res.ok) throw new Error('Network error');
        const data = await res.json();
        document.getElementById('ipAddress').textContent = data.ip;
      } catch (e) {
        // fallback, PHP IP is already shown
        console.log('Using server IP fallback');
      }
    }
    fetchIP();

    // Bonus: Smooth scroll for links (if internal)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', e => {
        e.preventDefault();
        document.querySelector(anchor.getAttribute('href')).scrollIntoView({behavior: 'smooth'});
      });
    });
  </script>
</footer>
