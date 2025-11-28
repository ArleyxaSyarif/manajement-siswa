<x-app-layout>

    <!-- Menggunakan warna dan font konsisten dengan tema gelap -->
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-white leading-tight">
            {{ __('Data Tahun Ajar') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Tombol Tambah Tahun Ajar -->
            <a href="{{ route('tahun.create') }}"
                class="inline-flex items-center px-4 py-2 bg-[#06B6D4] border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-500 active:bg-[#06B6D4] focus:outline-none focus:ring-2 focus:ring-[#06B6D4] focus:ring-offset-2 focus:ring-offset-[#0F172A] transition ease-in-out duration-150 shadow-lg mb-6">
                <!-- Icon Plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Tambah Tahun Ajar
            </a>

            <!-- Card Kontainer Tabel -->
            <div class="bg-[#1E293B] overflow-hidden shadow-xl rounded-2xl border border-gray-700/50">
                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-700/50">
                            <!-- Header Tabel -->
                            <thead class="bg-gray-700/30">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider rounded-tl-lg">
                                        ID Tahun</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-semibold text-slate-300 uppercase tracking-wider">
                                        Tahun Ajaran</th>
                                    <th scope="col" class="px-6 py-3 rounded-tr-lg"></th>
                                </tr>
                            </thead>
                            <!-- Body Tabel -->
                            <tbody class="divide-y divide-gray-700/50">
                                @foreach ($tahuns as $tahun)
                                    <tr class="hover:bg-[#0F172A] transition duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-white font-medium">
                                            {{ $tahun->id_tahun }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-slate-300">
                                            {{ $tahun->tahun }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <!-- Form Hapus -->
                                            <form action="{{ route('tahun.destroy', $tahun->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus tahun ajaran ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                    <!-- Icon Trash -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"></path>
                                                        <path d="M10 11v6"></path>
                                                        <path d="M14 11v6"></path>
                                                        <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                </button>
                                            </form>
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
