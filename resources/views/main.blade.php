<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Symphonix</title>
        <!-- Tailwind -->
        @vite(['resources/css/app.css'])
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/28113ccba1.js" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        
        <x-navbar />
        <x-Sidebar />

    </body>
</html>
