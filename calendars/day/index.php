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
        <h1 class="text-3xl font-bold mb-4">Hong Kong Disneyland Park</h1>
        <p class="text-lg font-semibold mb-2"><?php echo date('l, F j, Y'); ?></p>
        <p>Hong Kong Disneyland Park is a magical theme park located on Lantau Island, offering world-class attractions, thrilling rides, and unforgettable experiences for visitors of all ages.</p>
        
        <h2 class="text-2xl font-bold text-blue-800 mt-6 mb-2">Mickey's Magical Show</h2>
        <p>10:00 AM, 1:30 PM, 4:00 PM</p>
        
        <h2 class="text-2xl font-bold text-blue-800 mt-6 mb-2">Frozen Ever After Parade</h2>
        <p>11:00 AM, 2:00 PM, 5:30 PM</p>
        
        <h2 class="text-2xl font-bold text-blue-800 mt-6 mb-2">The Lion King Spectacle</h2>
        <p>12:00 PM, 3:00 PM, 6:00 PM</p>
        
        <h2 class="text-2xl font-bold text-blue-800 mt-6 mb-2">Nighttime Fireworks Show</h2>
        <p>8:00 PM</p>
        
        <h2 class="text-2xl font-bold text-blue-800 mt-6 mb-2">Adventureland Jungle Cruise</h2>
        <p>9:30 AM, 12:30 PM, 3:30 PM, 6:30 PM</p>
        
        <h2 class="text-2xl font-bold text-blue-800 mt-6 mb-2">Marvel Superhero Encounter</h2>
        <p>10:30 AM, 1:00 PM, 4:30 PM, 7:00 PM</p>
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