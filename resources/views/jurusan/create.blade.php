<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Jurusan') }}
        </h2>
    </x-slot>


    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="mb-4">
                        <label for="id_jurusan" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">ID
                            Jurusan:</label>
                        <input type="text" name="id_jurusan" id="id_jurusan"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="nama_jurusan" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Nama
                            Jurusan:</label>
                        <input type="text" name="nama_jurusan" id="nama_jurusan"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                </div>

            </div>
        </div>


    </form>

    <a href="{{ route('jurusan.index') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-800 text-white font-semibold rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
        Daftar jurusan
    </a>


</x-app-layout>
