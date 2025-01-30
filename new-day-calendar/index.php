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

        <div class="flex justify-between items-center mb-4">
            <button id="prevMonth" class="bg-blue-500 text-white px-4 py-2 rounded">← Prev</button>
            <h2 id="currentMonth" class="text-xl font-bold"></h2>
            <button id="nextMonth" class="bg-blue-500 text-white px-4 py-2 rounded">Next →</button>
        </div>

        <div class="flex flex-col md:flex-row">

            <div class="flex-1">
                <div class="grid grid-cols-7 gap-2 text-center font-bold mb-2">
                    <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div>
                </div>
                <div id="calendar" class="grid grid-cols-7 gap-2"></div>
            </div>

            <div class="ml-6">
                <h2 class="text-xl font-bold mb-2">Ticket Tiers</h2>
                <div class="flex items-center mb-2">
                    <span class="w-4 h-4 bg-blue-200 inline-block mr-2"></span> Tier 1
                </div>
                <div class="flex items-center mb-2">
                    <span class="w-4 h-4 bg-blue-400 inline-block mr-2"></span> Tier 2
                </div>
                <div class="flex items-center mb-2">
                    <span class="w-4 h-4 bg-blue-600 inline-block mr-2"></span> Tier 3
                </div>
                <div class="flex items-center mb-2">
                    <span class="w-4 h-4 bg-blue-800 inline-block mr-2"></span> Tier 4
                </div>
                <div class="flex items-center">
                    <span class="w-4 h-4 bg-gray-200 inline-block mr-2"></span> Not Available
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p>&copy; <?php echo date("Y"); ?> Hong Kong Disneyland. All Rights Reserved.</p>
        <nav class="mt-2">
            <a href="/privacy.php" class="text-blue-600 hover:underline mr-4">Privacy Policy</a>
            <a href="/terms.php" class="text-blue-600 hover:underline">Terms of Conduct</a>
        </nav>
    </footer>
    <script>
        const tierColors = ['bg-blue-200', 'bg-blue-400', 'bg-blue-600', 'bg-blue-800', 'bg-gray-200'];
        let currentDate = new Date();
        let storedData = JSON.parse(localStorage.getItem('calendarData')) || {};

        function saveCalendarData() {
            storedData.expiry = new Date().getTime() + 7 * 24 * 60 * 60 * 1000;
            localStorage.setItem('calendarData', JSON.stringify(storedData));
        }

        function getStoredTier(dateKey) {
            if (!storedData[dateKey]) {
                storedData[dateKey] = tierColors[Math.floor(Math.random() * tierColors.length)];
                saveCalendarData();
            }
            return storedData[dateKey];
        }

        function generateCalendar() {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
            const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

            document.getElementById('currentMonth').textContent =
                firstDay.toLocaleString('en-US', { month: 'long', year: 'numeric' });

            const calendar = document.getElementById('calendar');
            calendar.innerHTML = '';

            const daysInMonth = lastDay.getDate();
            const startDay = firstDay.getDay();

            for (let i = 0; i < startDay; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.classList.add('p-4');
                calendar.appendChild(emptyCell);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const date = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
                const cell = document.createElement('div');
                cell.classList.add('p-4', 'text-center', 'rounded-lg', 'font-semibold');

                if (date < today) {
                    cell.classList.add('bg-gray-200');
                } else {
                    const dateKey = `${date.getFullYear()}-${date.getMonth()}-${day}`;
                    cell.classList.add(getStoredTier(dateKey));
                }

                cell.textContent = day;
                calendar.appendChild(cell);
            }
        }

        if (storedData.expiry && storedData.expiry < new Date().getTime()) {
            localStorage.removeItem('calendarData');
            storedData = {};
        }

        document.getElementById('prevMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            generateCalendar();
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            generateCalendar();
        });

        generateCalendar();
    </script>
</body>
</html>