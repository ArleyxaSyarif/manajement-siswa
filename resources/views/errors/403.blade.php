<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center p-6">
        <h1 class="text-7xl font-bold text-indigo-600">403</h1>
        <p class="text-xl text-gray-700 mt-4">Akses ditolak. Kamu tidak memiliki izin membuka halaman ini.</p>

        <a href="{{ url('dashboard') }}"
            class="mt-6 inline-block px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
            Kembali ke Beranda
        </a>
    </div>
</body>

</html>
