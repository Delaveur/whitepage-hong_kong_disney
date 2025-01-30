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
        <h1 class="text-3xl font-bold mb-4">Special Offers of Hong Kong Disneyland Park</h1>
        <p>Discover the exclusive special offers available at Hong Kong Disneyland Park. From unique experiences to magical benefits, these offers provide guests with unforgettable adventures.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Exclusive Park Benefits</h2>
        <p>Visitors can enjoy early park entry, priority access to popular attractions, and unique character meet-and-greet sessions. These benefits allow you to make the most of your visit.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Accommodation Packages</h2>
        <p>Stay at one of the enchanting Disneyland hotels and take advantage of bundled offers that include park tickets, dining discounts, and special in-room surprises.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Dining and Shopping Perks</h2>
        <p>Enjoy special discounts at various restaurants and souvenir shops throughout the park. Guests can also access exclusive merchandise available only through these limited-time offers.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Seasonal Events and Celebrations</h2>
        <p>Immerse yourself in the magic of the season with themed entertainment, seasonal decorations, and limited-edition souvenirs. These celebrations offer a unique way to experience the park.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Family Fun Bundles</h2>
        <p>Enjoy tailored packages designed for families looking to make the most of their Disney adventure.</p>
        <ul class="list-disc list-inside mt-4">
            <li>Group discounts for families with children.</li>
            <li>Special multi-day passes with added perks.</li>
            <li>Exclusive kids' activity packages.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">VIP Tour Services</h2>
        <p>Experience the park like never before with personalized VIP tour services.</p>
        <ul class="list-disc list-inside mt-4">
            <li>Private guided tours with Disney experts.</li>
            <li>Front-of-line access to major attractions.</li>
            <li>Exclusive behind-the-scenes experiences.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Special Event Tickets</h2>
        <p>Get access to exclusive after-hours events and special Disney celebrations.</p>
        <ul class="list-disc list-inside mt-4">
            <li>Limited-time themed parties and shows.</li>
            <li>Exclusive character meet-and-greet sessions.</li>
            <li>Commemorative souvenirs for event attendees.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Annual Passholder Perks</h2>
        <p>Maximize your Disney experience with exclusive benefits for annual pass holders.</p>
        <ul class="list-disc list-inside mt-4">
            <li>Discounts on food, merchandise, and special events.</li>
            <li>Early access to new attractions and experiences.</li>
            <li>Exclusive preview nights and passholder-only gifts.</li>
        </ul>
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