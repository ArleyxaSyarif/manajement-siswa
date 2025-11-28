<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (Auth::user()->role == 'admin')
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg text-center p-6">
                        <div class="flex flex-col h-full">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">
                                Jurusan Terdaftar
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                {{ $jurusan->count() }} Jurusan Terdaftar
                            </p>

                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div class="flex flex-col h-full">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3">
                                Siswa Terdaftar
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6 flex-grow">
                                {{ $siswa->count() }} Siswa Terdaftar
                            </p>

                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div class="flex flex-col h-full">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3">
                                Kelas Terdaftar
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6 flex-grow">
                                {{ $kelas->count() }} Kelas Terdaftar
                            </p>

                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div class="flex flex-col h-full">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3">
                                Tahun Ajar Terdaftar
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6 flex-grow">
                                {{ $tahuns->count() }} Tahun Ajar Terdaftar
                            </p>

                        </div>
                    </div>
                </div>


                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div
                        class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 mt-6 md:col-span-2">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3">
                            Siswa Terbaru
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

                    <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">
                            Grafik Data Sekolah
                        </h3>

                        <canvas id="schoolChart" width="400" height="400"></canvas>
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
