<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the magic of Entertainment park. Book tickets, hotel stays, and more.">
    <meta name="keywords" content="Entertainment park, theme park, tickets, attractions, hotels">
    <meta name="author" content="Entertainment park">
    <title>Privacy policy</title>
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
                <li><a href="/hotels/park-hotel/" class="hover:underline">Hotel</a></li>
                <li><a href="/contact-us/" class="hover:underline">Contact us</a></li>
            </ul>
        </nav>
    </div>
    <div class="bg-blue-500 text-white py-4 text-center relative">
        <h1 class="text-2xl font-bold">Entertainment park</h1>
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
        <h1 class="text-3xl font-bold mb-4">Privacy Policy</h1>
        <p>We take the confidentiality of your personal information very seriously. This policy explains what information we collect, how it is used, and your rights as a user.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Collected Information</h2>
        <p>We collect data when you interact with our website, such as:</p>
        <ul class="list-disc list-inside mt-4">
            <li>Your contact information (name, email, phone number).</li>
            <li>Information about your device (IP address, browser, operating system).</li>
            <li>Your preferences and interactions with the site.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Use of Data</h2>
        <p>We use your information to:</p>
        <ul class="list-disc list-inside mt-4">
            <li>Provide the requested services.</li>
            <li>Improve our products and services.</li>
            <li>Send relevant communications and respond to your inquiries.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Data Sharing</h2>
        <p>Your data is shared only:</p>
        <ul class="list-disc list-inside mt-4">
            <li>With third-party service providers for the operation of our website.</li>
            <li>If required by law.</li>
        </ul>

        <h2 class="text-2xl font-bold mt-6 mb-2">Your Rights</h2>
        <p>You have the right to access, correct, or request the deletion of your personal data. For any request, please contact us via our contact form.</p>

        <h2 class="text-2xl font-bold mt-6 mb-2">Security</h2>
        <p>We employ advanced security measures to protect your information from unauthorized access.</p>
    </section>


    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p>&copy; <?php echo date("Y"); ?> IT TECH SERVICES & CONSULTATION LTD. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
</body>
</html>