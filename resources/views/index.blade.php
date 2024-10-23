<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Rasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="bg-gray-300 py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img src="/assets/logo.png" class="w-16" alt="Rumah Rasa Logo">
                <h1 class="text-4xl font-bold text-black">RUMAH RASA</h1>
            </div>
            <ul class="flex space-x-6 text-xl font-semibold">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Resep Rasa</a></li>
                <li><a href="#" class="hover:underline">Belanja Yuk</a></li>
                <li><a href="#" class="hover:underline">Instagram</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative">
        <img src="/assets/atas.jpg" alt="Hero Image" class="w-full h-96 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-4">Welcome to Rumah Rasa</h2>
                <a href="about.html" class="underline text-lg">Visit</a>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="container mx-auto py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-semibold">Resep</h2>
            <p class="text-lg mt-2">Terbanyak diminati</p>
        </div>

        <!-- Recipe Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Recipe Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="/assets/resep.jpg" class="w-full h-64 object-cover" alt="Resep 1">
                <div class="p-6">
                    <h3 class="text-3xl font-bold">Donat Kentang Bunga</h3>
                    <p class="text-lg mt-4">Rasanya enak banget dan lembut. Resep ini untuk takaran adonan ini.</p>
                </div>
            </div>

            <!-- Recipe Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="/assets/resep.jpg" class="w-full h-64 object-cover" alt="Resep 2">
                <div class="p-6">
                    <h3 class="text-3xl font-bold">Donat Kentang Bunga</h3>
                    <p class="text-lg mt-4">Rasanya enak banget dan lembut. Resep ini untuk takaran adonan ini.</p>
                </div>
            </div>

            <!-- Recipe Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                <img src="/assets/resep.jpg" class="w-full h-64 object-cover" alt="Resep 3">
                <div class="p-6">
                    <h3 class="text-3xl font-bold">Donat Kentang Bunga</h3>
                    <p class="text-lg mt-4">Rasanya enak banget dan lembut. Resep ini untuk takaran adonan ini.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 py-8 text-white text-center">
        <div class="container mx-auto">
            <img src="/assets/bawah.png" class="mx-auto w-24" alt="Rumah Rasa Logo">
            <h1 class="text-3xl font-bold mt-6">Website Rumah Rasa</h1>
            <p class="mt-4 text-lg">Rumah Rasa adalah situs web yang menawarkan berbagai resep masakan dari beragam budaya.</p>
        </div>
    </footer>

</body>
</html>
