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
        <div class="flex flex-col items-center justify-center h-screen text-center">
            <h1 class="text-4xl font-bold text-gray-800">Muhamad Rafly Firdaus Oktabian</h1>
            <h2 class="text-2xl text-gray-600" id="role"></h2>
        </div>
        <!-- End Hero Section -->

        <!-- About Section -->
        <div class="container">
            <h2 class="text-3xl font-bold text-center mb-8">Tentang Saya</h2>
            <div class="flex flex-col items-center justify-center">  
                <img src="{{ asset('images/test.jpeg') }}" alt="Foto Profil" class="object-cover h-52 w-52 pb-5 mb-5">
                <div>
                    <p class="text-lg text-gray-700">
                        Saya adalah seorang pengembang web dengan pengalaman lebih dari 3 tahun di industri ini.
                    </p>
                    <h3 class="text-xl font-semibold mt-4">Keahlian:</h3>
                    <ul class="list-disc list-inside">
                        <li>Pengembangan Aplikasi Web</li>
                        <li>Desain UI/UX</li>
                        <li>Pengoptimalan Performa</li>
                    </ul>
                    <p class="mt-4">Visi saya adalah untuk menciptakan solusi digital yang memudahkan kehidupan sehari-hari.</p>
                </div>
            </div>
        </div>
         <!-- End About Section -->

         {{-- Education Section --}}
         {{-- End Education Section --}}

         {{-- Project Section --}}
         {{-- End Project Section --}}
    </div>

    {{-- Script Role --}}
    <script>
        const roles = ["System Administrator", "Cloud Engineer", "DevOps"];
        let index = 0;
        
        function changeRole() {
            const roleElement = document.getElementById('role');
            roleElement.textContent = roles[index];
            index = (index + 1) % roles.length;
        }
        setInterval(changeRole, 2000);
        changeRole();
    </script>
    </body>
</html>
