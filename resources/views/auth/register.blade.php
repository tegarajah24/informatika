<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-50">
        <div>
            <!-- Logo Perusahaan -->
            <a href="/" class="flex items-center gap-3 justify-center mb-2 group">
                <div class="w-12 h-12 bg-blue-900 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <div class="text-left">
                    <h1 class="font-bold text-2xl leading-tight text-slate-800">Informatika</h1>
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Universitas Harapan Bangsa</p>
                </div>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-10 py-10 bg-white shadow-xl shadow-slate-200/50 overflow-hidden sm:rounded-3xl border border-slate-100">
            <h2 class="text-2xl font-bold text-center text-slate-800 mb-8">Buat Akun Baru</h2>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Nama Lengkap') }}" class="text-slate-600 font-medium" />
                    <x-input id="name" class="block mt-1 w-full border-slate-200 focus:border-blue-900 focus:ring focus:ring-blue-900/20 rounded-lg shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-label for="email" value="{{ __('Email') }}" class="text-slate-600 font-medium" />
                    <x-input id="email" class="block mt-1 w-full border-slate-200 focus:border-blue-900 focus:ring focus:ring-blue-900/20 rounded-lg shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div>
                    <x-label for="password" value="{{ __('Password') }}" class="text-slate-600 font-medium" />
                    <x-input id="password" class="block mt-1 w-full border-slate-200 focus:border-blue-900 focus:ring focus:ring-blue-900/20 rounded-lg shadow-sm" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div>
                    <x-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" class="text-slate-600 font-medium" />
                    <x-input id="password_confirmation" class="block mt-1 w-full border-slate-200 focus:border-blue-900 focus:ring focus:ring-blue-900/20 rounded-lg shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required class="text-blue-900 focus:ring-blue-900 rounded" />
                                <div class="ms-2 text-sm text-slate-600">
                                    {!! __('Saya menyetujui :terms_of_service dan :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline font-medium text-blue-900 hover:text-blue-800">'.__('Syarat dan Ketentuan').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline font-medium text-blue-900 hover:text-blue-800">'.__('Kebijakan Privasi').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="pt-4">
                    <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-3 bg-blue-900 border border-transparent rounded-xl font-bold text-sm text-white hover:bg-blue-800 focus:bg-blue-800 active:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2 transition-all shadow-md shadow-blue-900/20">
                        {{ __('Daftar Sekarang') }}
                    </button>
                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-slate-500">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="font-bold text-blue-900 hover:underline">Masuk di sini</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
