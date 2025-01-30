<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the magic of Hong Kong Disneyland. Book tickets, hotel stays, and more.">
    <meta name="keywords" content="Hong Kong Disneyland, theme park, tickets, attractions, hotels">
    <meta name="author" content="Disney">
    <title>Terms of conduct</title>
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
            <li><a href="/calendars/day/#/theme-park/" class="block py-2 hover:underline">Day view</a></li>
            <li><a href="/offers-discounts/" class="block py-2 hover:underline">Offers</a></li>
            <li><a href="/destinations/theme-park/" class="block py-2 hover:underline">Theme park</a></li>
            <li><a href="/railroad/" class="block py-2 hover:underline">Railroad</a></li>
            <li><a href="/sliding/" class="block py-2 hover:underline">Sliding Sleighs</a></li>
        </ul>
    </div>
    <section class="container mx-auto min-h-[764px] p-4">
    <h1 class="text-3xl font-bold mb-4">General Terms</h1>
        <p>These general terms govern the use of our website. By accessing this site, you agree to the terms and conditions described below.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Use of the Site</h2>
        <p>The site is intended for personal and non-commercial use. You agree not to use the site for illegal or harmful activities.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Intellectual Property</h2>
        <p>All site content, including text, images, logos, and other elements, is protected by copyright. Any reproduction or distribution without prior authorization is prohibited.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Liabilities</h2>
        <p>We cannot be held responsible for direct or indirect damages resulting from the use of our website. You use the site at your own risk.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Modifications</h2>
        <p>We reserve the right to modify these general terms at any time. Changes will take effect as soon as they are published on the site.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Contact</h2>
        <p>If you have any questions regarding these general terms, please contact us through our contact form.</p>
    </section>

    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p>&copy; <?php echo date("Y"); ?> Hong Kong Disneyland. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>