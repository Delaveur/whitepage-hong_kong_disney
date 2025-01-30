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
            <img src="/upload/railroad.png" alt="Hong Kong Disneyland Railroad" class="w-full h-full object-cover">
        </div>
        <h1 class="text-3xl font-bold mt-4">Hong Kong Disneyland Railroad</h1>
        <p class="mt-2">Step aboard the Hong Kong Disneyland Railroad for a scenic and nostalgic journey around the park. This classic steam-powered train offers a relaxing and enchanting way to explore the magic of Disneyland while enjoying stunning views of the themed lands.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2 text-blue-800">A Grand Tour of the Park</h2>
        <p>Experience a leisurely trip on this vintage-style locomotive, making stops at various key locations around the park. It’s the perfect way to take in the sights and sounds of Disneyland from a unique perspective.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2 text-blue-800">Themed Train Stations</h2>
        <p>Each station along the Hong Kong Disneyland Railroad features its own unique architectural design, immersing guests in the charm and atmosphere of different Disney stories.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2 text-blue-800">Main Street Station</h2>
        <p>Located at the entrance of the park, Main Street Station welcomes guests with its Victorian-style architecture and grand clock tower. As you board the train, you'll feel as if you've stepped back in time, ready to explore the wonders of Hong Kong Disneyland from a new perspective.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2 text-blue-800">Fantasyland Station</h2>
        <p>Nestled within the magical world of Fantasyland, this station offers a charming stop where guests can easily access beloved attractions like Cinderella Carousel and The Many Adventures of Winnie the Pooh. The whimsical design of the station adds to the fairytale atmosphere of the area.</p> 

        <h2 class="text-2xl font-bold mt-6 mb-2 text-blue-800">Relax and Enjoy the Ride</h2>
        <p>The Hong Kong Disneyland Railroad provides a delightful way to travel between key locations in the park without missing any of the magic. As you glide along the tracks, keep an eye out for stunning backdrops, surprise character appearances, and immersive storytelling elements that make each ride unique.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2 text-blue-800">Perfect for All Ages</h2>
        <p>Whether you're looking for a relaxing break from the excitement or a fun ride for the whole family, the Hong Kong Disneyland Railroad provides a timeless adventure that captures the essence of classic Disney charm.</p>
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