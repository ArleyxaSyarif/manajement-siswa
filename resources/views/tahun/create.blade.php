<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Tahun') }}
        </h2>
    </x-slot>

    <form action="{{ route('tahun.store') }}" method="POST">
        @csrf

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-4">
                    <label for="id_tahun" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">ID Tahun:</label>
                    <input type="text" name="id_tahun" id="id_tahun"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="tahun" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Tahun:</label>
                    <input type="text" name="tahun" id="tahun"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
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
    <a href="{{ route('tahun.index') }}"
        class="inline-flex items-center px-4 py-2 bg-gray-800 text-white font-semibold rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
        Daftar tahun

    </a>
</x-app-layout>
