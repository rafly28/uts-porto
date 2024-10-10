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
    <body class="antialiased scroll-smooth">
        <div class="container max-w-full mx-auto px-4">
            <!-- Sticky Navbar -->
            {{-- <nav class="bg-white shadow-md fixed w-full z-10 top-0">
                <div class="max-w-7xl mx-auto px-4 py-3">
                    <div class="flex justify-between items-center">
                        <!-- Logo -->
                        <a href="#home" class="text-xl font-bold text-gray-800">Muhamad Rafly Firdaus</a>
                        <!-- Navbar Links -->
                        <div class="space-x-6">
                            <a href="#home" class="text-gray-600 hover:text-gray-900">Home</a>
                            <a href="#about" class="text-gray-600 hover:text-gray-900">About</a>
                            <a href="#education" class="text-gray-600 hover:text-gray-900">Education</a>
                            <a href="#projects" class="text-gray-600 hover:text-gray-900">Projects</a>
                        </div>
                    </div>
                </div>
            </nav> --}}
            <!-- Hero Section -->
            <div id="Home" class="flex flex-col items-center justify-center h-screen text-center">
                <h1 class="text-4xl font-bold text-gray-800">Muhamad Rafly Firdaus Oktabian</h1>
                <h2 class="text-2xl text-gray-600" id="role"></h2>
            </div>
            <!-- End Hero Section -->
    
            <!-- About Section -->
            <div id="About" class="py-10">
                <h2 class="text-3xl font-bold text-center mb-8">Tentang Saya</h2>
                <div class="flex flex-col items-center justify-center">  
                    <img src="{{ asset('images/profile.jpeg') }}" alt="Foto Profil" class="rounded-full object-cover h-52 w-52 pb-5 mb-5">
                    <div class="max-w-xl text-center">
                        <p class="text-lg text-gray-700">
                            Teknisi IT berpengalaman dengan keahlian kuat dalam administrasi sistem Linux dan pengelolaan container
                            Docker. Teruji dalam mengoptimalkan kinerja infrastruktur IT, memecahkan masalah teknis kompleks, dan
                            memastikan ketersediaan layanan. Terus mengikuti perkembangan teknologi terbaru untuk memberikan
                            solusi yang inovatif.
                        </p>
                    </div>
                </div>
            
                <!-- Skill Cards Section -->
                <div class="py-10">
                    <h3 class="text-2xl font-semibold text-center mb-6">Keahlian</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                            <img src="{{ asset('images/linux.png') }}" alt="Linux" class="h-16 w-16 mb-4">
                            <h4 class="text-lg font-semibold">Linux System Administration</h4>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                            <img src="{{ asset('images/docker.png') }}" alt="Docker" class="h-16 w-16 mb-4 object-cover">
                            <h4 class="text-lg font-semibold">Docker</h4>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                            <img src="{{ asset('images/kubernetes.png') }}" alt="Kubernetes" class="h-16 w-16 mb-4 object-cover">
                            <h4 class="text-lg font-semibold">Kubernetes</h4>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                            <img src="{{ asset('images/jenkins.png') }}" alt="Jenkins" class="h-16 w-16 mb-4 object-cover">
                            <h4 class="text-lg font-semibold">Jenkins</h4>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                            <img src="{{ asset('images/git.png') }}" alt="Git" class="h-16 w-16 mb-4 object-cover">
                            <h4 class="text-lg font-semibold">Git</h4>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                            <img src="{{ asset('images/ansible.png') }}" alt="Ansible" class="h-16 w-16 mb-4 object-cover">
                            <h4 class="text-lg font-semibold">Ansible</h4>
                        </div>
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
                            <img src="{{ asset('images/cloud.png') }}" alt="Cloud" class="h-16 w-16 mb-4 object-cover">
                            <h4 class="text-lg font-semibold">Cloud</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- End About Section -->
    
            <!-- Education Section -->
            <div id="Education" class="min-h-[516px] py-10 bg-gray-100">
                <h2 class="text-3xl font-bold text-center mb-8">Pendidikan</h2>
            
                <div class="relative max-w-4xl mx-auto">
                    <!-- Vertical Line -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-2 border-gray-300"></div>
                    <div class="mb-10 flex items-center w-full">
                        <div class="w-1/2"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-4 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold">Universitas Budiluhur Salemba</h3>
                                <span class="text-gray-600">Teknik Informatika</span>
                                <p class="mt-2 text-gray-700">2020 - Sekarang</p>
                                <p class="mt-2 text-sm text-gray-600">Mempelajari lebih dalam tentang pengembangan perangkat lunak, jaringan, dan keamanan IT.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-10 flex items-center w-full">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-4 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold">SMK Angkasa 1 Margahayu</h3>
                                <span class="text-gray-600">Teknik Komputer dan Jaringan</span>
                                <p class="mt-2 text-gray-700">2016 - 2019</p>
                                <p class="mt-2 text-sm text-gray-600">Fokus pada troubleshooting, implementasi, dan konfigurasi Perangkat Keras dan Perangkat Jaringan </p>
                            </div>
                        </div>
                        <div class="w-1/2"></div>
                    </div>
                </div>
            </div>
            
            <!-- End Education Section -->
    
            <!-- Projects Section -->
            <div id="Project" class="min-h-[516px] py-10">
                <h2 class="text-3xl font-bold text-center mb-8">Project</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project Card 1 -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-2">Aplikasi Penilaian Karyawan</h3>
                        <p class="text-gray-700 mb-4">Aplikasi yang ditujukan untuk menilai karyawan agar bisa memenuhi kriteria karyawan terbaik.</p>
                        <a href="https://github.com/rafly28/CRUD-laravel" class="text-blue-500 hover:underline">Lihat Proyek</a>
                    </div>
                    <!-- Project Card 2 -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-xl font-bold mb-2">Project Containerization Ansible</h3>
                        <p class="text-gray-700 mb-4">Sebuah project yang bertujuan agar bisa menggunakan ansible secara ringkas dengan docker.</p>
                        <a href="https://www.linkedin.com/posts/rafly-firdaus-537534231_automation-menggunakan-ansible-yang-running-activity-7169700279922180096-QkTP?utm_source=share&utm_medium=member_desktop" class="text-blue-500 hover:underline">Lihat Proyek</a>
                    </div>
                </div>
            </div>
            <!-- End Projects Section -->
    
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
