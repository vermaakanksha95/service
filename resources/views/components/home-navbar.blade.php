
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityCab Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-yellow-500 text-white p-4 fixed w-full top-0 z-50 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo and title -->
            <div class="flex items-center">
                <img src="https://via.placeholder.com/50" alt="CityCab Logo" class="w-12 h-12 mr-3">
                <span class="text-2xl font-bold">CityCab</span>
            </div>

            <!-- Navbar Links -->
            <ul class="hidden md:flex space-x-6">
                <li><a href="/" class="hover:text-yellow-300 text-lg">Home</a></li>
                <li><a href="/about" class="hover:text-yellow-300 text-lg">About</a></li>
                <li><a href="/faq" class="hover:text-yellow-300 text-lg">F.A.Q</a></li>
                <li><a href="/blog" class="hover:text-yellow-300 text-lg">Blog</a></li>
            </ul>

            <!-- Call to Action Button -->
            <div>
                <a href="#" class="bg-white text-yellow-600 px-4 py-2 rounded-md font-semibold hover:bg-gray-100">
                    Book a Ride
                </a>
            </div>

            <!-- Mobile Menu Icon -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden mt-4 ">
            <ul class="space-y-4 text-center">
                <li><a href="#" class="block text-lg text-white hover:text-yellow-300">Home</a></li>
                <li><a href="#" class="block text-lg text-white hover:text-yellow-300">Services</a></li>
                <li><a href="#" class="block text-lg text-white hover:text-yellow-300">Rides</a></li>
                <li><a href="#" class="block text-lg text-white hover:text-yellow-300">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Area -->
   

    <script>
        // Toggle mobile menu visibility
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
