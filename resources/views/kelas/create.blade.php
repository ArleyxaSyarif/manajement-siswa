<x-app-layout>

    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-white leading-tight">
            {{ __('Tambah Kelas Baru') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <!-- Card Kontainer Form -->
            <div class="bg-[#1E293B] overflow-hidden shadow-xl rounded-2xl border border-gray-700/50 p-8">

                <form action="{{ route('kelas.store') }}" method="POST">
                    @csrf

                    <!-- Judul Form -->
                    <h3 class="text-xl font-bold text-white mb-6 border-b border-gray-700/50 pb-3">
                        Detail Kelas
                    </h3>

                    <!-- Input: Nama Kelas -->
                    <div class="mb-6">
                        <label for="nama_kelas" class="block text-slate-300 font-semibold mb-2">Nama Kelas:</label>
                        <input type="text" name="nama_kelas" id="nama_kelas"
                            class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150"
                            placeholder="Contoh: XII RPL 1" required>
                    </div>

                    <!-- Input: Level Kelas -->
                    <div class="mb-6">
                        <label for="level_kelas" class="block text-slate-300 font-semibold mb-2">Level Kelas:</label>
                        <input type="text" name="level_kelas" id="level_kelas"
                            class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150"
                            placeholder="Contoh: 12" required>
                    </div>

                    <!-- Select: Jurusan -->
                    <div class="mb-8">
                        <label for="jurusan_id" class="block text-slate-300 font-semibold mb-2">Jurusan:</label>
                        <div class="relative">
                            <select name="jurusan_id" id="jurusan_id"
                                class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150 appearance-none"
                                required>
                                <option value="" disabled selected>Pilih Jurusan</option>
                                @foreach ($jurusans as $jurusan)
                                    <option value="{{ $jurusan->id }}" class="bg-[#1E293B] text-white">
                                        {{ $jurusan->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Custom Arrow Icon -->
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="flex items-center justify-between space-x-4">

                        <!-- Tombol Simpan -->
                        <button type="submit"
                            class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-[#06B6D4] border border-transparent rounded-lg font-bold text-sm text-white uppercase tracking-widest hover:bg-cyan-500 active:bg-[#06B6D4] focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:ring-offset-2 focus:ring-offset-[#0F172A] transition ease-in-out duration-150 shadow-lg shadow-cyan-900/50">
                            <!-- Icon Save -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg>
                            Simpan Data
                        </button>

                        <!-- Tombol Kembali -->
                        <a href="{{ route('kelas.index') }}"
                            class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-gray-700 border border-transparent rounded-lg font-bold text-sm text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-[#0F172A] transition ease-in-out duration-150">
                            <!-- Icon Back -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M19 12H5" />
                                <polyline points="12 19 5 12 12 5" />
                            </svg>
                            Kembali ke Daftar
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>
