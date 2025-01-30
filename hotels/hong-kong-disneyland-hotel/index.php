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
        <div class="overflow-hidden h-[400px]">
            <img src="/upload/hotel-2.png" alt="Hong Kong Disneyland Hotel" class="w-full h-full object-cover">
        </div>
        <h1 class="text-3xl font-bold mt-4">Hong Kong Disneyland Hotel</h1>
        <p class="mt-2">Indulge in timeless elegance at the Hong Kong Disneyland Hotel, where you’ll revel in the eternal magic of Disney; refined and reimagined for the most discerning of travelers. From the grandest Victorian architecture to the most enchanting latticework, every delicate detail pulls you deeper into the timeless charm of Disney storytelling.</p>
        <p class="mt-2">Boasting stately accommodations with modern amenities plus live music in the grand 6-story lobby, this architectural marvel combines the splendor of a vintage seaside resort with the magic of Disney.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Service Adjustment</h2>
        <p class="mt-2">The new regulation on disposable plastic products starts on April 22, 2024. Under the new regulation, Hong Kong Disneyland Resort Hotels are prohibited from providing free toiletries packed in disposable plastic containers, toiletries made of plastics, and disposable plastic-bottled water in the guest rooms.</p>
        <p class="mt-2">Bring your own toiletries to join our “Reduce Plastic” initiatives. Together, let’s minimize the use of disposable plastic products.</p>
        <p class="mt-2">We provide:</p>
        <ul class="list-disc list-inside mt-2">
            <li>Bath gel</li>
            <li>Shampoo</li>
            <li>Conditioner</li>
            <li>Adult toothbrush set</li>
            <li>Children toothbrush set</li>
            <li>Comb</li>
            <li>Cotton pad</li>
            <li>Cotton swab</li>
            <li>Emery board</li>
            <li>Water in glass bottle</li>
        </ul>
        <p class="mt-2">The below toiletries are available for purchase at the Hotel Front Desk:</p>
        <ul class="list-disc list-inside mt-2">
            <li>Razor</li>
            <li>Shower cap</li>
        </ul>
        <h2 class="text-2xl font-bold mt-6 mb-2">Book Online NOW and Enjoy FREE Room Upgrade</h2>
        <p class="mt-2">Book your hotel stay online to receive exclusive privileges—room upgrade and complimentary drink.</p>
        <p class="mt-2">Room upgrade applies to the following category:</p>
        <ul class="list-disc list-inside mt-2">
            <li>Standard -&gt; Deluxe</li>
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