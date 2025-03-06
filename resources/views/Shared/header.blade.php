<nav class="bg-gray-800 p-4 shadow-lg fixed w-full top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
        <img src="https://i.ibb.co.com/Y7fpTbrX/illustration-logo-grand-hotel-boutique-vintage-design-free-vector-removebg-preview-2.png" alt="logo" style="width:90px; height:70px; position: absolute; margin-left:-90px;">
        <a href="#" class="text-white text-xl font-bold"><span style="margin-left:-3px; color: orangered;">G</span>randPr <span style="margin-left:-5px; color: orangered;">0</span> Hotel</a>
        <ul id="menu" class="hidden md:flex space-x-6 text-white md:items-center">
            <li><a href="/" class="hover:text-yellow-500">Home</a></li>

            <li><a href="/inspiration" class="hover:text-yellow-500">Inspiration</a></li>
            <li><a href="/about" class="hover:text-yellow-500">About</a></li>
            <li><a href="/contact" class="hover:text-yellow-500">Contact</a></li>
            <li><a href="/roombooking" class="bg-green-400 px-4 py-2 rounded-md hover:bg-yellow-600 text-black">Book Now</a></li>
            <li><a href="/login" class="bg-blue-500 px-4 py-2 rounded-md hover:bg-green-600">Log in</a></li>
        </ul>
    </div>
    <button id="menu-btn" class="md:hidden text-white text-3xl focus:outline-none">
        &#9776;
    </button>
    <ul id="mobile-menu" class="hidden flex-col space-y-4 text-white bg-gray-900 p-4 mt-2 md:hidden">
        <li><a href="/" class="block hover:text-yellow-500">Home</a></li>
        <li><a href="/inspiration" class="block hover:text-yellow-500">Inspiration</a></li>
        <li><a href="/about" class="block hover:text-yellow-500">About</a></li>
        <li><a href="/contact" class="block hover:text-yellow-500">Contact</a></li>
        <li><a href="/roombooking" class="block bg-green-400 px-4 py-2 rounded-md hover:bg-yellow-600 text-black text-center">Book Now</a></li>
        <li><a href="/login" class="block bg-blue-500 px-4 py-2 rounded-md hover:bg-green-600 text-center">Log in</a></li>
    </ul>
</nav>
<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>