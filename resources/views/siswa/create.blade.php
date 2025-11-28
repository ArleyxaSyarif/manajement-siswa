<x-app-layout>

    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-white leading-tight">
            {{ __('Tambah Siswa Baru') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <!-- Card Kontainer Form -->
            <div class="bg-[#1E293B] overflow-hidden shadow-xl rounded-2xl border border-gray-700/50 p-8">

                <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Judul Form -->
                    <h3 class="text-xl font-bold text-white mb-6 border-b border-gray-700/50 pb-3">
                        Detail Siswa
                    </h3>

                    <!-- Input: Nama Siswa -->
                    <div class="mb-6">
                        <label for="nama_siswa" class="block text-slate-300 font-semibold mb-2">Nama Siswa:</label>
                        <input type="text" name="nama_siswa" id="nama_siswa"
                            class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150"
                            placeholder="Masukkan nama lengkap siswa" required>
                    </div>

                    <!-- Input: NISN Siswa -->
                    <div class="mb-6">
                        <label for="nisn_siswa" class="block text-slate-300 font-semibold mb-2">NISN Siswa:</label>
                        <input type="text" name="nisn_siswa" id="nisn_siswa"
                            class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150"
                            placeholder="Nomor Induk Siswa Nasional" required>
                    </div>

                    <!-- Input: Alamat Siswa -->
                    <div class="mb-6">
                        <label for="alamat_siswa" class="block text-slate-300 font-semibold mb-2">Alamat Siswa:</label>
                        <input type="text" name="alamat_siswa" id="alamat_siswa"
                            class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150"
                            placeholder="Alamat lengkap" required>
                    </div>

                    <!-- Select: Jenis Kelamin -->
                    <div class="mb-6">
                        <label for="jenis_kelamin" class="block text-slate-300 font-semibold mb-2">Jenis
                            Kelamin:</label>
                        <div class="relative">
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150 appearance-none"
                                required>
                                <option value="" disabled selected class="text-slate-500">Pilih Jenis Kelamin
                                </option>
                                <option value="Laki-laki" class="bg-[#1E293B]">Laki-laki</option>
                                <option value="Perempuan" class="bg-[#1E293B]">Perempuan</option>
                            </select>
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

                    <!-- Input: Foto Siswa (File Input) -->
                    <div class="mb-6">
                        <label for="foto_siswa" class="block text-slate-300 font-semibold mb-2">Foto Siswa:</label>
                        <input type="file" name="foto_siswa" id="foto_siswa"
                            class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:shadow-outline 
                                file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 
                                file:text-sm file:font-semibold file:bg-cyan-600 file:text-white 
                                hover:file:bg-cyan-700 transition duration-150 cursor-pointer"
                            required>
                    </div>

                    <!-- Select: Agama -->
                    <div class="mb-6">
                        <label for="agama" class="block text-slate-300 font-semibold mb-2">Agama:</label>
                        <div class="relative">
                            <select name="agama" id="agama"
                                class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150 appearance-none"
                                required>
                                <option value="" disabled selected class="text-slate-500">Pilih Agama</option>
                                <option value="Islam" class="bg-[#1E293B]">Islam</option>
                                <option value="Kristen" class="bg-[#1E293B]">Kristen</option>
                                <option value="Katolik" class="bg-[#1E293B]">Katolik</option>
                                <option value="Hindu" class="bg-[#1E293B]">Hindu</option>
                                <option value="Buddha" class="bg-[#1E293B]">Buddha</option>
                                <option value="Konghucu" class="bg-[#1E293B]">Konghucu</option>
                            </select>
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

                    <!-- Input: Tanggal Lahir -->
                    <div class="mb-6">
                        <label for="tanggal_lahir" class="block text-slate-300 font-semibold mb-2">Tanggal
                            Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                            class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150"
                            required>
                    </div>

                    <!-- Select: Kelas -->
                    <div class="mb-6">
                        <label for="kelas_id" class="block text-slate-300 font-semibold mb-2">Kelas:</label>
                        <div class="relative">
                            <select name="kelas_id" id="kelas_id"
                                class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150 appearance-none"
                                required>
                                <option value="" disabled selected class="text-slate-500">Pilih Kelas</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}" class="bg-[#1E293B]">{{ $k->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
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

                    <!-- Select: Tahun Ajar -->
                    <div class="mb-8">
                        <label for="tahun_id" class="block text-slate-300 font-semibold mb-2">Tahun Ajaran:</label>
                        <div class="relative">
                            <select name="tahun_id" id="tahun_id"
                                class="w-full bg-[#0F172A] border border-gray-700/50 text-white rounded-lg py-2 px-4 leading-tight focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:border-[#06B6D4] transition duration-150 appearance-none"
                                required>
                                <option value="" disabled selected class="text-slate-500">Pilih Tahun Ajaran
                                </option>
                                @foreach ($tahun as $t)
                                    <option value="{{ $t->id }}" class="bg-[#1E293B]">{{ $t->tahun }}
                                    </option>
                                @endforeach
                            </select>
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
                        <a href="{{ route('siswa.index') }}"
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
