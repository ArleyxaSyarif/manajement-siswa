<nav x-data="{ open: false }" class="bg-[#0F172A] border-b border-[#1E293B] shadow-lg shadow-gray-900/10">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">

            <div class="flex items-center">
                <!-- Logo (Menggunakan ikon yang sama seperti di formulir login) -->
                <div class="shrink-0 flex items-center mr-6">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                        <div
                            class="w-10 h-10 bg-[#06B6D4] rounded-lg flex items-center justify-center shadow-lg shadow-[#06B6D4]/30">
                            <!-- Ikon Monitor -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#0F172A]" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect width="20" height="14" x="2" y="3" rx="2" />
                                <line x1="8" x2="16" y1="21" y2="21" />
                                <line x1="12" x2="12" y1="17" y2="21" />
                            </svg>
                        </div>
                        <span
                            class="text-2xl font-extrabold text-white tracking-wider hidden sm:block">Management</span>
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden space-x-2 sm:-my-px sm:ms-6 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="text-base text-slate-300 hover:text-white hover:border-[#06B6D4] focus:border-[#06B6D4] py-6 px-3 transition duration-200">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                @if (Auth::user()->role == 'admin')
                    <div class="hidden space-x-2 sm:-my-px sm:ms-4 sm:flex">
                        <x-nav-link :href="route('tahun.index')" :active="request()->routeIs('tahun.index')"
                            class="text-base text-slate-300 hover:text-white hover:border-[#06B6D4] focus:border-[#06B6D4] py-6 px-3 transition duration-200">
                            {{ __('Tahun') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-2 sm:-my-px sm:ms-4 sm:flex">
                        <x-nav-link :href="route('jurusan.index')" :active="request()->routeIs('jurusan.index')"
                            class="text-base text-slate-300 hover:text-white hover:border-[#06B6D4] focus:border-[#06B6D4] py-6 px-3 transition duration-200">
                            {{ __('Jurusan') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-2 sm:-my-px sm:ms-4 sm:flex">
                        <x-nav-link :href="route('kelas.index')" :active="request()->routeIs('kelas.index')"
                            class="text-base text-slate-300 hover:text-white hover:border-[#06B6D4] focus:border-[#06B6D4] py-6 px-3 transition duration-200">
                            {{ __('Kelas') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-2 sm:-my-px sm:ms-4 sm:flex">
                        <x-nav-link :href="route('siswa.index')" :active="request()->routeIs('siswa.index')"
                            class="text-base text-slate-300 hover:text-white hover:border-[#06B6D4] focus:border-[#06B6D4] py-6 px-3 transition duration-200">
                            {{ __('Siswa') }}
                        </x-nav-link>
                    </div>
                @endif


            </div>

            <!-- Settings Dropdown (Desktop) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-4 py-2.5 border border-transparent text-base leading-4 font-semibold rounded-xl text-slate-300 bg-[#1E293B] hover:text-white hover:bg-[#111827] focus:outline-none transition ease-in-out duration-300 shadow-md shadow-gray-900/30">
                            <div class="truncate max-w-[120px]">{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Dropdown Content Styling -->
                        <div class="rounded-lg py-1">
                            <x-dropdown-link :href="route('profile.edit')"
                                class="text-slate-300 hover:bg-[#0F172A] hover:text-white transition duration-200">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="text-red-400 hover:bg-[#0F172A] hover:text-red-300 transition duration-200">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-3 rounded-xl text-slate-400 hover:text-white hover:bg-[#1E293B] focus:outline-none focus:bg-[#1E293B] focus:text-white transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-[#1E293B] border-t border-[#0F172A]">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                class="text-base text-slate-300 hover:text-white hover:bg-[#0F172A]">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            @if (Auth::user()->role == 'admin')
                <x-responsive-nav-link :href="route('tahun.index')" :active="request()->routeIs('tahun.index')"
                    class="text-base text-slate-300 hover:text-white hover:bg-[#0F172A]">
                    {{ __('Tahun') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('jurusan.index')" :active="request()->routeIs('jurusan.index')"
                    class="text-base text-slate-300 hover:text-white hover:bg-[#0F172A]">
                    {{ __('Jurusan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('kelas.index')" :active="request()->routeIs('kelas.index')"
                    class="text-base text-slate-300 hover:text-white hover:bg-[#0F172A]">
                    {{ __('Kelas') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('siswa.index')" :active="request()->routeIs('siswa.index')"
                    class="text-base text-slate-300 hover:text-white hover:bg-[#0F172A]">
                    {{ __('Siswa') }}
                    </x-responsive-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-3 border-t border-[#0F172A]">
            <div class="px-4">
                <div class="font-bold text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-slate-400">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')"
                    class="text-base text-slate-300 hover:text-white hover:bg-[#0F172A]">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                        class="text-base text-red-400 hover:text-red-300 hover:bg-[#0F172A]">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
