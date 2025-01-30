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
    <section class="container mx-auto min-h-[764px] p-4">
        <h1 class="text-3xl font-bold mb-4">Hong Kong Disneyland Park</h1>
        <p>Hong Kong Disneyland Park is a magical theme park located on Lantau Island, offering world-class attractions, thrilling rides, and unforgettable experiences for visitors of all ages.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Park Overview</h2>
        <p>Opened in 2005, Hong Kong Disneyland Park features seven themed lands, each providing unique adventures and entertainment:</p>
        <ul class="list-disc list-inside mt-4">
            <li>Main Street, U.S.A. – A nostalgic recreation of early 20th-century America.</li>
            <li>Fantasyland – The home of classic Disney characters and fairy tale magic.</li>
            <li>Adventureland – A jungle-themed area with thrilling rides and shows.</li>
            <li>Tomorrowland – A futuristic world filled with high-tech attractions.</li>
            <li>Grizzly Gulch – A Wild West-themed land with a runaway mine train ride.</li>
            <li>Mystic Point – A mysterious land with an award-winning dark ride.</li>
            <li>Toy Story Land – Inspired by Pixar’s Toy Story movies, featuring fun rides.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Must-See Attractions</h2>
        <p>Some of the top attractions in the park include:</p>
        <ul class="list-disc list-inside mt-4">
            <li>Iron Man Experience – A thrilling flight simulation with Marvel’s Iron Man.</li>
            <li>Big Grizzly Mountain Runaway Mine Cars – A roller coaster adventure.</li>
            <li>Mystic Manor – A one-of-a-kind interactive dark ride.</li>
            <li>It’s a Small World – A delightful boat ride celebrating global cultures.</li>
            <li>Hyperspace Mountain – A Star Wars-themed high-speed coaster.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Entertainment & Parades</h2>
        <p>Hong Kong Disneyland Park is known for its spectacular entertainment offerings, including:</p>
        <ul class="list-disc list-inside mt-4">
            <li>Disney Paint the Night Parade – A dazzling nighttime parade with glowing floats.</li>
            <li>Mickey and the Wondrous Book – A live stage musical with beloved Disney characters.</li>
            <li>Momentous – A breathtaking nighttime spectacular featuring fireworks, lights, and music.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Dining & Shopping</h2>
        <p>The park offers a variety of dining options, from quick snacks to fine dining experiences. Visitors can also shop for exclusive Disney merchandise at themed stores throughout the park.</p>
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