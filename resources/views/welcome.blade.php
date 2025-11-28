<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Data Siswa - SMK Informatika Pesat</title>
    <!-- Memuat Tailwind CSS untuk styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Memuat Lucide Icons untuk ikon yang bersih -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                    },
                    colors: {
                        // Palet Profesional dan Teknologi
                        'dark-primary': '#0F172A', // Slate 900 - Dasar gelap
                        'dark-secondary': '#1E293B', // Slate 800 - Untuk card/kontras
                        'accent-tech': '#06B6D4', // Cyan 500 - Aksen utama
                        'accent-hover': '#0891B2', // Cyan 600
                        'text-light': '#F8FAFC', // Slate 50
                        'text-muted': '#94A3B8', // Slate 400
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.bunny.net/css?family=instrument-sans:400,600,700');

        body {
            /* Latar Belakang Gelap dan Font */
            /* Background ditangani oleh kelas Tailwind di tag body */
            color: #F8FAFC;
            font-family: 'Instrument Sans', sans-serif;
        }

        /* Style untuk Tombol dengan bayangan dan transisi yang halus */
        .btn-tech {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }

        .btn-tech:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 15px -3px rgba(6, 182, 212, 0.3), 0 4px 6px -4px rgba(6, 182, 212, 0.2);
        }
    </style>
</head>

<!-- Latar belakang kini menggunakan gradient statis dengan kelas Tailwind:
     bg-gradient-to-br dari dark-primary ke dark-secondary dengan aksen di sudut -->

<body
    class="dark bg-gradient-to-br from-dark-primary via-[#0B1525] to-dark-secondary min-h-screen flex items-center justify-center p-4 lg:p-12">

    <!-- Container Utama Halaman Selamat Datang - Menggunakan card fokus -->
    <div class="w-full max-w-lg">

        <!-- Card Login/Welcome yang Profesional -->
        <div class="bg-dark-secondary p-8 md:p-10 rounded-2xl shadow-2xl border border-gray-700/50 backdrop-blur-sm">

            <!-- Header Sekolah dan Logo -->
            <header class="mb-10 text-center">
                <!-- Ikon Komputer/Sains dari Lucide Icons -->
                <div
                    class="mx-auto w-12 h-12 mb-4 bg-accent-tech rounded-full flex items-center justify-center text-dark-primary text-3xl font-bold transform transition duration-500 hover:rotate-6">
                    <i data-lucide="monitor-dot" class="w-6 h-6 text-dark-primary"></i>
                </div>
                <h1 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-text-light mb-1">
                    SMK Informatika Pesat
                </h1>
                <p class="text-md text-text-muted font-medium">
                    Sistem Manajemen Data Siswa
                </p>
            </header>

            <!-- Deskripsi Aplikasi -->
            <main class="mb-8">
                <h2 class="text-xl font-semibold text-text-light mb-4 border-b border-gray-700 pb-2">Akses Portal</h2>
                <p class="text-sm text-text-muted mb-6">
                    Silakan masuk menggunakan akun resmi Anda untuk mengakses data akademik, informasi absensi, dan
                    jadwal pelajaran.
                </p>

                <!-- Tombol Login dan Register -->
                <div class="flex flex-col sm:flex-row justify-center gap-4">

                    <!-- Tombol Login (Primary - Aksen Tech) -->
                    <a href="/login"
                        class="btn-tech flex-1 inline-flex items-center justify-center gap-2 px-6 py-3 bg-accent-tech text-dark-primary font-bold rounded-lg text-base shadow-lg shadow-accent-tech/20 uppercase tracking-wider hover:bg-accent-hover">
                        <i data-lucide="log-in" class="w-4 h-4"></i>
                        Login
                    </a>

                    <!-- Tombol Register (Secondary - Outline) -->
                    <a href="/register"
                        class="btn-tech flex-1 inline-flex items-center justify-center gap-2 px-6 py-3 bg-transparent border border-gray-600 text-text-muted font-bold rounded-lg text-base uppercase tracking-wider hover:bg-gray-700 hover:text-text-light">
                        <i data-lucide="user-plus" class="w-4 h-4"></i>
                        Register
                    </a>
                </div>
            </main>

            <!-- Footer Card / Keamanan -->
            <footer class="mt-8 pt-4 border-t border-gray-700">
                <p class="text-xs text-text-muted text-center">
                    <i data-lucide="shield-check" class="w-3 h-3 inline mr-1"></i>
                    Akses Terbatas. Keamanan Data Siswa Terjamin.
                </p>
            </footer>

        </div>
    </div>
    <!-- Script untuk menginisialisasi ikon Lucide -->
    <script>
        lucide.createIcons();
    </script>
</body>

</html>
