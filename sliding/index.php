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
    <section class="container mx-auto min-h-[764px] p-4">
        <div class="overflow-hidden h-[400px]">
            <img src="/upload/roller.png" alt="Wandering Oaken’s Sliding Sleighs" class="w-full h-full object-cover">
        </div>
        <h1 class="text-3xl font-bold mt-4">Wandering Oaken’s Sliding Sleighs</h1>
        <p class="mt-2">Embark on a thrilling adventure through the snowy landscapes of Arendelle with Wandering Oaken’s Sliding Sleighs. This family-friendly roller coaster, inspired by Disney’s Frozen, offers an exciting ride full of twists, turns, and magical surprises.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">A Frozen-Themed Adventure</h2>
        <p class="mt-2">Designed by the cheerful Wandering Oaken himself, these sleighs are powered by Olaf and Sven, taking guests on an exhilarating ride through the wintry terrain of Arendelle. Feel the rush of the icy wind as you slide through scenic snowy slopes.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Ride Highlights</h2>
        <ul class="list-disc list-inside mt-2">
            <li>Beautifully themed Frozen setting with immersive details.</li>
            <li>Exciting twists and turns for the whole family.</li>
            <li>Cheerful encounters with beloved characters like Olaf and Sven.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Who Can Ride?</h2>
        <p class="mt-2">This attraction is suitable for guests of all ages, with a minimum height requirement to ensure a safe and fun experience for everyone.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Location</h2>
        <p class="mt-2">Wandering Oaken’s Sliding Sleighs is located in the heart of World of Frozen, bringing the magic of Arendelle to life at Hong Kong Disneyland.</p>
    </section>


    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p>&copy; <?php echo date("Y"); ?> Hong Kong Disneyland. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="/privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="/terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>