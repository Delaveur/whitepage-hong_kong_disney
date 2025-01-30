<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the magic of Hong Kong Disneyland. Book tickets, hotel stays, and more.">
    <meta name="keywords" content="Hong Kong Disneyland, theme park, tickets, attractions, hotels">
    <meta name="author" content="Disney">
    <title>Hong Kong Disneyland</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="bg-purple-700 text-white py-2 text-center">
        <nav>
            <ul class="flex justify-center space-x-6">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/new-day-calendar/" class="hover:underline">Calendar</a></li>
                <li><a href="/hotels/hong-kong-disneyland-hotel/" class="hover:underline">Hotel</a></li>
                <li><a href="/contact-us/" class="hover:underline">Contact us</a></li>
            </ul>
        </nav>
    </div>
    <div class="bg-blue-500 text-white py-4 text-center relative">
        <h1 class="text-2xl font-bold">Hong Kong Disneyland</h1>
        <button class="absolute right-4 top-4 lg:hidden" onclick="toggleMenu()">☰</button>
        <nav class="hidden lg:block mt-2">
            <ul class="flex justify-center space-x-6">
                <li><a href="/calendars/day/#/theme-park/" class="hover:underline">Day view</a></li>
                <li><a href="/offers-discounts/" class="hover:underline">Offers</a></li>
                <li><a href="/destinations/theme-park/" class="hover:underline">Theme park</a></li>
                <li><a href="/railroad/" class="hover:underline">Railroad</a></li>
                <li><a href="/sliding/" class="hover:underline">Sliding Sleighs</a></li>
            </ul>
        </nav>
    </div>
    <div id="mobile-menu" class="hidden bg-blue-600 text-white p-4 lg:hidden">
        <ul>
            <li><a href="#" class="block py-2 hover:underline">About</a></li>
            <li><a href="#" class="block py-2 hover:underline">Plan Your Visit</a></li>
            <li><a href="#" class="block py-2 hover:underline">Events</a></li>
            <li><a href="#" class="block py-2 hover:underline">Contact</a></li>
        </ul>
    </div>
    <section class="flex justify-center my-6">
        <video autoplay loop muted class="w-3/4 rounded-lg shadow-lg">
            <source src="/upload/main.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>
    <section class="max-w-6xl mx-auto grid grid-cols-3 gap-0 bg-white shadow-md rounded-lg">
        <div class="col-span-2 overflow-hidden h-64">
            <img src="/upload/main-1.png" alt="Disneyland" class="w-full h-full object-cover">
        </div>
        <div class="overflow-hidden h-64">
            <img src="/upload/main-2.png" alt="Disneyland" class="w-full h-full object-cover">
        </div>
        <div class="p-6">
            <h2 class="text-xl font-bold">Discover the Magic of Hong Kong Disneyland</h2>
            <p class="mt-2 text-gray-600">Experience thrilling rides, enchanting shows, and magical moments with your favorite Disney characters.</p>
        </div>
        <div class="overflow-hidden h-64">
            <img src="/upload/main-3.png" alt="Disneyland" class="w-full h-full object-cover">
        </div>
        <div class="p-6">
            <p class="text-gray-600">Plan your adventure with exciting attractions and exclusive experiences.</p>
        </div>
    </section>
    <section class="grid grid-cols-3 gap-0 mt-6">
        <a href="/" class="col-span-2 overflow-hidden h-96"><img src="/upload/main-4.png" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="/sliding/" class="col-span-1 overflow-hidden h-96"><img src="/upload/roller.png" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="/railroad/" class="col-span-1 overflow-hidden h-80"><img src="/upload/railroad.png" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="/destinations/theme-park/" class="col-span-1 overflow-hidden h-80"><img src="/upload/disney-park.png" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="/new-day-calendar/" class="col-span-1 overflow-hidden h-80"><img src="/upload/main-8.png" class="w-full h-full object-cover hover:opacity-80 transition"></a>
    </section>
    <!-- Contact Form Section -->
    <section id="contact" class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-4">Contact form</h2>
        <form action="contact.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="lastName" class="block mb-2">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="firstName" class="block mb-2">First Name</label>
                <input type="text" id="firstName" name="firstName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2">Message</label>
                <textarea id="message" name="message" class="w-full p-2 border rounded-lg"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">Send</button>
        </form>
    </section>
    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p>&copy; <?php echo date("Y"); ?> Hong Kong Disneyland. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
    <!-- Cookies Notice -->
    <div id="cookie-notice" class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4 text-center" style="display: none;">
        <p>We use cookies to enhance your experience. By continuing, you agree to our <a href="privacy.php" class="text-blue-400 underline">Privacy Policy</a>.</p>
        <button id="accept-cookies" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Accept</button>
    </div>
    <script>
        const cookieNotice = document.getElementById('cookie-notice');
        const acceptCookies = document.getElementById('accept-cookies');
        if (!localStorage.getItem('cookiesAccepted')) {
            cookieNotice.style.display = 'block';
        }
        acceptCookies.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieNotice.style.display = 'none';
        });
    </script>
</body>
</html>