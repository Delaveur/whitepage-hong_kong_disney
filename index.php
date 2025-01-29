<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the magic of Hong Kong Disneyland. Book tickets, hotel stays, and more.">
    <meta name="keywords" content="Hong Kong Disneyland, theme park, tickets, attractions, hotels">
    <meta name="author" content="Disney">
    <title>Hong Kong Disneyland</title>
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
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Tickets</a></li>
                <li><a href="#" class="hover:underline">Hotels</a></li>
                <li><a href="#" class="hover:underline">Attractions</a></li>
            </ul>
        </nav>
    </div>
    <div class="bg-blue-500 text-white py-4 text-center relative">
        <h1 class="text-2xl font-bold">Hong Kong Disneyland</h1>
        <button class="absolute right-4 top-4 lg:hidden" onclick="toggleMenu()">☰</button>
        <nav class="hidden lg:block mt-2">
            <ul class="flex justify-center space-x-6">
                <li><a href="#" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Plan Your Visit</a></li>
                <li><a href="#" class="hover:underline">Events</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
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
        <a href="#" class="col-span-2 overflow-hidden h-96"><img src="/upload/main-4.png" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="#" class="col-span-1 overflow-hidden h-96"><img src="/upload/main-5.jpg" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="#" class="col-span-1 overflow-hidden h-80"><img src="/upload/main-6.jpg" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="#" class="col-span-1 overflow-hidden h-80"><img src="/upload/main-7.jpg" class="w-full h-full object-cover hover:opacity-80 transition"></a>
        <a href="#" class="col-span-1 overflow-hidden h-80"><img src="/upload/main-8.png" class="w-full h-full object-cover hover:opacity-80 transition"></a>
    </section>
    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p>&copy; 2025 Hong Kong Disneyland. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="#" class="hover:underline mr-4">Privacy Policy</a>
            <a href="#" class="hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>