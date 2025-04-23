@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Jadwal Dokter')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-500 shadow p-4">
    <header class="bg-blue-500 shadow p-4">
        <div class="container mx-auto">
            <h1 class="text-xl font-bold">MEDIFAST Clinic</h1>
        </div>
    </header>

    <main class="py-6">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-10">
        <div class="text-center">
            &copy; {{ date('Y') }} Medifast Clinic
        </div>
    </footer>
</body>
</html>
