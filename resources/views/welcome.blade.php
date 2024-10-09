<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Asoyyy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
        <!-- Styles -->
        <!-- <style>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
        </style> -->
    </head>
    <body class="antialiased">
    <div class="container mx-auto px-4">
        <!-- Hero Section -->
        <div class="mt-5">
        </div>
        <div class="flex flex-col items-center justify-center h-screen text-center">
            <img src="{{ asset('images/test.jpeg') }}" alt="Foto Profil" class="w-48 h-48 rounded-full mb-5 object-cover">
            <h1 class="text-4xl font-bold text-gray-800">Muhamad Rafly Firdaus Oktabian</h1>
            <h2 class="text-2xl text-gray-600">System Administrator</h2>
            <p class="mt-4 text-gray-500 max-w-md">
                Deskripsi singkat tentang diri Anda. Anda bisa menjelaskan keahlian, pengalaman, atau minat Anda di sini.
            </p>
        </div>
    </div>
    </body>
</html>
