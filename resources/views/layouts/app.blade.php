<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Jadwal Dokter')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
<header class="bg-blue-500 shadow p-4">
        <div class="container mx-auto flex items-center">
            <img src="{{ asset('storage/images/1Trans.png') }}" alt="Logo" class="h-25 w-25 mr-4">
            <h1 class="text-xl text-white font-bold text-center flex-1">MEDIFAST Clinic</h1>
        </div>
</header>
    

    <main class="py-6">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="bg-blue-500 text-white p-4 mt-10">
        <div class="text-center">
            &copy; {{ date('Y') }} Medifast Clinic
        </div>
    </footer>
</body>
</html>
