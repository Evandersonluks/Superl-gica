<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased">
        <div class="flex h-screen justify-center space-x-4 items-center border">
            <x-link url="{{ route('first-test') }}" class="bg-gray-500 hover:bg-gray-600 py-6 px-10">Primeiro Teste</x-link>
            <x-link url="{{ route('second-test') }}" class="bg-gray-500 hover:bg-gray-600 py-6 px-10">Segundo Teste</x-link>
            <x-link url="{{ route('third-test') }}" class="bg-gray-500 hover:bg-gray-600 py-6 px-10">Terceiro Teste</x-link>
        </div>
    </body>
</html>
