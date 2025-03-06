<footer class="bg-black text-white p-10">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
    <nav>
      <h6 class="text-lg font-semibold mb-4">Services</h6>
      <ul class="space-y-2">
        <li><a class="hover:text-gray-400" href="#">Branding</a></li>
        <li><a class="hover:text-gray-400" href="#">Design</a></li>
        <li><a class="hover:text-gray-400" href="#">Marketing</a></li>
        <li><a class="hover:text-gray-400" href="#">Advertisement</a></li>
      </ul>
    </nav>
    <nav>
      <h6 class="text-lg font-semibold mb-4">Company</h6>
      <ul class="space-y-2">
        <li><a class="hover:text-gray-400" href="#">About us</a></li>
        <li><a class="hover:text-gray-400" href="#">Contact</a></li>
        <li><a class="hover:text-gray-400" href="#">Jobs</a></li>
        <li><a class="hover:text-gray-400" href="#">Press kit</a></li>
      </ul>
    </nav>
    <nav>
      <h6 class="text-lg font-semibold mb-4">Follow Us</h6>
      <div class="grid grid-cols-2 gap-2">
        <a>
          <i class="fa-brands fa-facebook text-2xl"></i>
        </a>
        <a>
          <i class="fa-brands fa-youtube text-2xl"></i>
        </a>
        <a>
          <i class="fa-brands fa-linkedin text-2xl"></i>
        </a>
        <a>
          <i class="fa-brands fa-youtube text-2xl"></i>
        </a>
      </div>

    </nav>
  </div>
</footer>
 <script>
        // Get the button
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        // When the user scrolls down 200px from the top of the document, show the button
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };

        // Scroll to top function
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>