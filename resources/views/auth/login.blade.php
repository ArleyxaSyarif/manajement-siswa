<x-guest-layout>
    <!-- Wrapper Utama dengan Latar Belakang Gradient Statis -->
    <!-- Menggunakan padding yang lebih besar untuk tampilan desktop -->
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0F172A] via-[#0B1525] to-[#1E293B] p-4 lg:p-16">

        <!-- Card Container Utama - Ditingkatkan ke MAX-W-7XL dan Padding yang lebih besar -->
        <div
            class="w-full max-w-7xl bg-[#1E293B] rounded-3xl shadow-2xl shadow-gray-900/50 overflow-hidden border border-gray-700/50 flex flex-col md:flex-row transform transition duration-500 hover:shadow-cyan-500/10">

            <!-- Bagian Kiri: Visual & Branding (Spacious Layout) -->
            <!-- Menggunakan padding p-16/p-20 untuk ruang yang sangat lega -->
            <div
                class="hidden md:flex md:w-2/5 lg:w-5/12 bg-[#0F172A] relative flex-col justify-between p-16 lg:p-20 items-start overflow-hidden">

                <!-- Elemen Dekoratif Background - Lebih halus dan luas -->
                <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                    <!-- Besar, Bulatan Cyan Buram -->
                    <div
                        class="absolute right-0 top-0 w-96 h-96 bg-[#06B6D4] rounded-full blur-3xl transform translate-x-1/4 -translate-y-1/4">
                    </div>
                    <!-- Bulatan Biru Buram di bawah -->
                    <div
                        class="absolute left-0 bottom-0 w-80 h-80 bg-[#3B82F6] rounded-full blur-3xl transform -translate-x-1/4 translate-y-1/4">
                    </div>
                    <!-- Pola grid subtle untuk tekstur -->
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;utf8,<svg width="40" height="40"
                        viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <g fill="%23FFFFFF" fill-opacity="0.03" fill-rule="evenodd">
                            <path d="M0 40L40 0H20L0 20M40 40V20L20 40" />
                        </g></svg>')]">
                    </div>
                </div>

                <!-- Logo & Brand -->
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-[#06B6D4] rounded-xl flex items-center justify-center mb-8 shadow-2xl shadow-[#06B6D4]/40">
                        <!-- Ikon Monitor (SVG inline) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-[#0F172A]" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect width="20" height="14" x="2" y="3" rx="2" />
                            <line x1="8" x2="16" y1="21" y2="21" />
                            <line x1="12" x2="12" y1="17" y2="21" />
                        </svg>
                    </div>
                    <!-- Ukuran Font Diperbesar untuk Judul -->
                    <h2 class="text-5xl font-extrabold text-white tracking-tight leading-tight">
                        Akses Penuh<br>Akademik Digital.
                    </h2>
                    <p class="mt-5 text-slate-400 text-lg leading-relaxed">
                        Masuk untuk mengakses dasbor akademik, informasi nilai, dan jadwal pelajaran yang selalu
                        diperbarui.
                    </p>
                </div>

                <!-- Footer Kecil di Kiri -->
                <div class="relative z-10 mt-auto pt-10">
                    <a href=""
                        class="text-base text-slate-500 hover:text-slate-300 transition-colors flex items-center gap-2 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                        Kembali ke Halaman Utama
                    </a>
                </div>
            </div>

            <!-- Bagian Kanan: Form Login (Spacious Layout) -->
            <!-- Menggunakan padding p-10/p-20 untuk ruang yang sangat lega -->
            <div
                class="w-full md:w-3/5 lg:w-7/12 p-10 sm:p-14 lg:p-20 bg-[#1E293B] flex flex-col justify-center relative">

                <!-- Judul Form -->
                <header class="mb-12">
                    <h2 class="text-4xl font-bold text-white mb-2">Selamat Datang Kembali</h2>
                    <p class="text-slate-400 text-lg">Silakan masukkan detail akun Anda.</p>
                </header>

                <!-- Session Status -->
                <x-auth-session-status class="mb-7" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-7">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-slate-300 font-semibold mb-2" />
                        <div class="relative">
                            <!-- Ikon Email -->
                            <span
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </span>
                            <x-text-input id="email"
                                class="block w-full pl-14 pr-4 bg-[#0F172A] border-gray-700 text-slate-200 focus:border-[#06B6D4] focus:ring-[#06B6D4] rounded-xl shadow-inner shadow-gray-900/20 transition duration-200 py-3.5 text-lg"
                                type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" placeholder="contoh@sekolah.id" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-sm" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-slate-300 font-semibold mb-2" />
                        <div class="relative">
                            <!-- Ikon Password -->
                            <span
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-500">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>


                            <x-text-input id="password"
                                class="block w-full pl-14 pr-4 bg-[#0F172A] border-gray-700 text-slate-200 focus:border-[#06B6D4] focus:ring-[#06B6D4] rounded-xl shadow-inner shadow-gray-900/20 transition duration-200 py-3.5 text-lg"
                                type="password" name="password" required autocomplete="current-password"
                                placeholder="••••••••" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-sm" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between pt-3">
                        <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                            <input id="remember_me" type="checkbox"
                                class="rounded bg-[#0F172A] border-gray-700 text-[#06B6D4] shadow-sm focus:ring-[#06B6D4] focus:ring-offset-[#1E293B] transition duration-200 ease-in-out cursor-pointer h-5 w-5"
                                name="remember">
                            <span
                                class="ml-3 text-base text-slate-400 group-hover:text-slate-300 transition-colors">{{ __('Ingat saya') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-base font-bold text-[#06B6D4] hover:text-[#0891B2] transition-colors duration-200 hover:underline focus:outline-none"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Tombol Login -->
                    <div class="pt-5">
                        <x-primary-button
                            class="w-full justify-center py-4 bg-[#06B6D4] hover:bg-[#0891B2] text-[#0F172A] font-extrabold text-xl shadow-2xl shadow-[#06B6D4]/40 hover:shadow-[#06B6D4]/60 border-none transition-all duration-300 transform hover:scale-[1.005] rounded-xl uppercase tracking-wider">
                            {{ __('Masuk Sekarang') }}
                        </x-primary-button>
                    </div>
                </form>

                <!-- Footer Card untuk Register -->
                <p class="mt-12 text-center text-base text-slate-400">
                    Belum punya akun siswa?
                    <a href="{{ route('register') }}"
                        class="font-bold text-[#06B6D4] hover:text-[#0891B2] transition-colors hover:underline ml-1">
                        Daftar disini
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
