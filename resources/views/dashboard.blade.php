<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (Auth::user()->role == 'admin')
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Card: Jurusan Terdaftar -->
                    <div
                        class="bg-[#1E293B] overflow-hidden rounded-2xl shadow-xl hover:shadow-[#06B6D4]/30 transition duration-300 transform hover:-translate-y-1 border border-gray-700/50 p-6">
                        <div class="flex items-center space-x-4">
                            <!-- Icon: Jurusan (Book) -->
                            <div
                                class="flex-shrink-0 p-3 bg-[#06B6D4]/20 rounded-xl text-[#06B6D4] shadow-md shadow-cyan-900/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M4 19.5V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v14.5" />
                                    <path d="M2 19.5h20" />
                                    <path d="M6 15.5h12" />
                                    <path d="M6 11.5h12" />
                                    <path d="M6 7.5h12" />
                                </svg>
                            </div>

                            <div class="flex flex-col">
                                <p class="text-sm font-semibold text-slate-400 uppercase tracking-wider">
                                    Jurusan Terdaftar
                                </p>
                                <div class="text-3xl font-extrabold text-[#06B6D4]">
                                    {{ $jurusan->count() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card: Siswa Terdaftar -->
                    <div
                        class="bg-[#1E293B] overflow-hidden rounded-2xl shadow-xl hover:shadow-[#06B6D4]/30 transition duration-300 transform hover:-translate-y-1 border border-gray-700/50 p-6">
                        <div class="flex items-center space-x-4">
                            <!-- Icon: Siswa (Users) -->
                            <div
                                class="flex-shrink-0 p-3 bg-[#06B6D4]/20 rounded-xl text-[#06B6D4] shadow-md shadow-cyan-900/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>

                            <div class="flex flex-col">
                                <p class="text-sm font-semibold text-slate-400 uppercase tracking-wider">
                                    Siswa Terdaftar
                                </p>
                                <div class="text-3xl font-extrabold text-[#06B6D4]">
                                    {{ $siswa->count() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card: Kelas Terdaftar -->
                    <div
                        class="bg-[#1E293B] overflow-hidden rounded-2xl shadow-xl hover:shadow-[#06B6D4]/30 transition duration-300 transform hover:-translate-y-1 border border-gray-700/50 p-6">
                        <div class="flex items-center space-x-4">
                            <!-- Icon: Kelas (Layers) -->
                            <div
                                class="flex-shrink-0 p-3 bg-[#06B6D4]/20 rounded-xl text-[#06B6D4] shadow-md shadow-cyan-900/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                    <path d="M2 17l10 5 10-5" />
                                    <path d="M2 12l10 5 10-5" />
                                </svg>
                            </div>

                            <div class="flex flex-col">
                                <p class="text-sm font-semibold text-slate-400 uppercase tracking-wider">
                                    Kelas Terdaftar
                                </p>
                                <div class="text-3xl font-extrabold text-[#06B6D4]">
                                    {{ $kelas->count() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card: Tahun Ajar Terdaftar -->
                    <div
                        class="bg-[#1E293B] overflow-hidden rounded-2xl shadow-xl hover:shadow-[#06B6D4]/30 transition duration-300 transform hover:-translate-y-1 border border-gray-700/50 p-6">
                        <div class="flex items-center space-x-4">
                            <!-- Icon: Tahun Ajar (Calendar) -->
                            <div
                                class="flex-shrink-0 p-3 bg-[#06B6D4]/20 rounded-xl text-[#06B6D4] shadow-md shadow-cyan-900/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                    <line x1="16" x2="16" y1="2" y2="6" />
                                    <line x1="8" x2="8" y1="2" y2="6" />
                                    <line x1="3" x2="21" y1="10" y2="10" />
                                </svg>
                            </div>

                            <div class="flex flex-col">
                                <p class="text-sm font-semibold text-slate-400 uppercase tracking-wider">
                                    Tahun Ajar
                                </p>
                                <div class="text-3xl font-extrabold text-[#06B6D4]">
                                    {{ $tahuns->count() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 gap-6">

                    <!-- Siswa Terbaru Table (Col Span 2) -->
                    <div
                        class="bg-[#1E293B] overflow-hidden shadow-xl rounded-2xl border border-gray-700/50 p-6 lg:col-span-2">
                        <h3 class="text-xl font-extrabold text-white mb-4 border-b border-gray-700/50 pb-3">
                            Siswa Terbaru
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-700/50">
                                <thead class="bg-gray-700/30">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                            Nama Siswa</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                            Kelas</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                            Jurusan</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                            Tahun Ajar</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-700/50">
                                    @foreach ($siswa->take(5) as $s)
                                        <tr class="hover:bg-[#0F172A] transition duration-150">
                                            <td class="px-6 py-4 whitespace-nowrap text-white font-medium">
                                                {{ $s->nama_siswa }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                                {{ $s->kelas->nama_kelas }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                                {{ $s->kelas->jurusan->nama_jurusan }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                                {{ $s->tahun->tahun }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Grafik Data Sekolah Card (Col Span 1) -->
                    <div class="bg-[#1E293B] shadow-xl rounded-2xl border border-gray-700/50 p-6">
                        <h3 class="text-xl font-extrabold text-white mb-4 border-b border-gray-700/50 pb-3">
                            Grafik Data Sekolah
                        </h3>

                        <!-- Ganti ukuran canvas agar proporsional di kolom 1/3 -->
                        <div class="relative w-full aspect-square">
                            <canvas id="schoolChart" class="w-full h-full"></canvas>
                        </div>

                    </div>
                </div>

            @endif




            @if (Auth::user()->role == 'siswa' || Auth::user()->role == 'guru')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div class="flex flex-col h-full w-full">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3">
                                Siswa Terdaftar
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6 flex-grow">
                                {{ $siswa->count() }} Siswa Terdaftar
                            </p>

                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div class="flex flex-col h-full w-full">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3">
                                Jurusan Terdaftar
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6 flex-grow">
                                {{ $jurusan->count() }} Jurusan Terdaftar
                            </p>

                        </div>
                    </div>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 mt-6 md:col-span-2">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3">
                        Siswa Terdaftar
                    </h3>
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Nama Siswa</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Kelas</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Jurusan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                    Tahun Ajar</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($siswa->take(5) as $s)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">{{ $s->nama_siswa }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">{{ $s->kelas->nama_kelas }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">
                                        {{ $s->kelas->jurusan->nama_jurusan }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-white">{{ $s->tahun->tahun }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            @endif

        </div>
    </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('schoolChart').getContext('2d');
    const schoolChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Kelas', 'Jurusan', 'Tahun Ajar'],
            datasets: [{
                label: 'Jumlah Terdaftar',
                data: [
                    {{ $kelas->count() }},
                    {{ $jurusan->count() }},
                    {{ $tahuns->count() }}
                ],
                backgroundColor: [
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },

    });
</script>
