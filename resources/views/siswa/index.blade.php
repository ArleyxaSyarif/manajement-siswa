<x-app-layout>

    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-white leading-tight">
            {{ __('Daftar Siswa') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Tombol Tambah Siswa (Diasumsikan route siswa.create ada) -->
            <div class="mb-6">
                <a href="{{ route('siswa.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-[#06B6D4] border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-500 active:bg-[#06B6D4] focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:ring-offset-2 focus:ring-offset-[#0F172A] transition ease-in-out duration-150 shadow-lg">
                    <!-- Icon Plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Tambah Siswa
                </a>
            </div>

            <!-- Card Kontainer Tabel -->
            <div class="bg-[#1E293B] overflow-hidden shadow-xl rounded-2xl border border-gray-700/50">
                <div class="p-6">

                    <!-- Pesan Sukses -->
                    @if (session('success'))
                        <div
                            class="mb-6 p-4 rounded-lg bg-green-900/50 border border-green-500/50 text-green-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-700/50">
                            <!-- Header Tabel -->
                            <thead class="bg-gray-700/30">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider rounded-tl-lg">
                                        Nama Siswa</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        NISN</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        Alamat</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        Jenis Kelamin</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        Foto Siswa</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        Agama</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        Tanggal Lahir</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        Kelas</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider rounded-tr-lg">
                                        Tahun Ajar</th>
                                </tr>
                            </thead>
                            <!-- Body Tabel -->
                            <tbody class="divide-y divide-gray-700/50">
                                @foreach ($siswas as $s)
                                    <tr class="hover:bg-[#0F172A] transition duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-white font-medium">
                                            {{ $s->nama_siswa }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            {{ $s->nisn_siswa }}
                                        </td>
                                        <td class="px-6 py-4 text-slate-300 max-w-xs truncate">
                                            {{ $s->alamat_siswa }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            {{ $s->jenis_kelamin }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            <img src="{{ asset('storage/foto_siswa/' . $s->foto_siswa) }}"
                                                alt="Foto Siswa"
                                                class="w-12 h-12 object-cover rounded-lg border border-gray-700/50"
                                                onerror="this.onerror=null;this.src='https://placehold.co/48x48/1F2937/FFFFFF?text=No+Foto'">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            {{ $s->agama }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            {{ \Carbon\Carbon::parse($s->tanggal_lahir)->format('d/m/Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            {{ $s->kelas->nama_kelas }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            {{ $s->tahun->tahun }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
