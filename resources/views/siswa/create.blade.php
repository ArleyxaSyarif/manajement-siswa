<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Siswa') }}
        </h2>
    </x-slot>


    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="mb-4">
                        <label for="nama_siswa" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Nama
                            Siswa:</label>
                        <input type="text" name="nama_siswa" id="nama_siswa"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="nisn_siswa" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">NISN
                            Siswa:</label>
                        <input type="text" name="nisn_siswa" id="nisn_siswa"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="alamat_siswa" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Alamat
                            Siswa:</label>
                        <input type="text" name="alamat_siswa" id="alamat_siswa"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="jenis_kelamin" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Jenis
                            Kelamin:</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="foto_siswa" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Foto
                            Siswa:</label>
                        <input type="file" name="foto_siswa" id="foto_siswa"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="agama"
                            class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Agama:</label>
                        <select name="agama" id="agama"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="tanggal_lahir" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Tanggal
                            Lahir:</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="kelas_id"
                            class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Kelas:</label>
                        <select name="kelas_id" id="kelas_id"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="tahun_id"
                            class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Tahun:</label>
                        <select name="tahun_id" id="tahun_id"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            @foreach ($tahun as $t)
                                <option value="{{ $t->id }}">{{ $t->tahun }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>

    </form>

    <a href="{{ route('siswa.index') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-800 text-white font-semibold rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
        Daftar siswa
    </a>

</x-app-layout>
