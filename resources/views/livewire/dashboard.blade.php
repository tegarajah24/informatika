<div class="space-y-8 p-6 lg:p-8">
    <!-- Hero / Greeting Banner -->
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-800 rounded-2xl shadow-lg p-6 sm:p-8 text-white">
        <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
        <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-purple-500/20 rounded-full blur-2xl"></div>
        
        <div class="relative z-10 max-w-2xl">
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight">
                Selamat Datang Kembali, {{ auth()->user()->name }}!
            </h1>
            <p class="mt-2 text-blue-100 text-sm sm:text-base">
                Kelola data program studi Informatika secara real-time. Dashboard ini menghubungkan seluruh data layanan, portfolio, testimonial, dan data dosen.
            </p>
        </div>
    </div>

    <!-- Statistics Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Services Card -->
        <a href="{{ route('services') }}" wire:navigate.hover class="group relative flex flex-col justify-between bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:border-blue-500/50">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold tracking-wider text-zinc-500 dark:text-zinc-400 uppercase">Services</span>
                <div class="p-3 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <h3 class="text-3xl font-extrabold text-zinc-950 dark:text-white">{{ $stats['services'] }}</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Layanan program studi aktif</p>
            </div>
        </a>

        <!-- Portfolios Card -->
        <a href="{{ route('portfolios') }}" wire:navigate.hover class="group relative flex flex-col justify-between bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:border-teal-500/50">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold tracking-wider text-zinc-500 dark:text-zinc-400 uppercase">Portfolio</span>
                <div class="p-3 bg-teal-50 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 rounded-xl group-hover:bg-teal-600 group-hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <h3 class="text-3xl font-extrabold text-zinc-950 dark:text-white">{{ $stats['portfolios'] }}</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Karya dan portfolio mahasiswa</p>
            </div>
        </a>

        <!-- Testimonials Card -->
        <a href="{{ route('testimonials') }}" wire:navigate.hover class="group relative flex flex-col justify-between bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:border-purple-500/50">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold tracking-wider text-zinc-500 dark:text-zinc-400 uppercase">Testimonials</span>
                <div class="p-3 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-xl group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <h3 class="text-3xl font-extrabold text-zinc-950 dark:text-white">{{ $stats['testimonials'] }}</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Testimoni alumni dan partner</p>
            </div>
        </a>

        <!-- Lecturers Card -->
        <a href="{{ route('dosen') }}" wire:navigate.hover class="group relative flex flex-col justify-between bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:border-amber-500/50">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold tracking-wider text-zinc-500 dark:text-zinc-400 uppercase">Data Dosen</span>
                <div class="p-3 bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 rounded-xl group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <h3 class="text-3xl font-extrabold text-zinc-950 dark:text-white">{{ $stats['dosen'] }}</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1">Dosen dan staf terdaftar</p>
            </div>
        </a>
    </div>

    <!-- Quick Navigation & Recent Lecturers Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Quick Actions & Links -->
        <div class="bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 lg:col-span-1">
            <h2 class="text-lg font-bold text-zinc-900 dark:text-white mb-4">Navigasi Cepat</h2>
            <div class="space-y-3">
                <a href="{{ route('services') }}" wire:navigate.hover class="flex items-center gap-3 p-3 rounded-xl border border-zinc-100 dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-750 transition-colors">
                    <span class="text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                    </span>
                    <div class="text-left">
                        <p class="text-sm font-semibold text-zinc-800 dark:text-zinc-200">Kelola Services</p>
                        <p class="text-xs text-zinc-500">Edit daftar layanan prodi</p>
                    </div>
                </a>
                
                <a href="{{ route('portfolios') }}" wire:navigate.hover class="flex items-center gap-3 p-3 rounded-xl border border-zinc-100 dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-750 transition-colors">
                    <span class="text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                    </span>
                    <div class="text-left">
                        <p class="text-sm font-semibold text-zinc-800 dark:text-zinc-200">Kelola Portfolio</p>
                        <p class="text-xs text-zinc-500">Atur pameran karya mahasiswa</p>
                    </div>
                </a>

                <a href="{{ route('testimonials') }}" wire:navigate.hover class="flex items-center gap-3 p-3 rounded-xl border border-zinc-100 dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-750 transition-colors">
                    <span class="text-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                    </span>
                    <div class="text-left">
                        <p class="text-sm font-semibold text-zinc-800 dark:text-zinc-200">Kelola Testimonials</p>
                        <p class="text-xs text-zinc-500">Lihat & setujui ulasan alumni</p>
                    </div>
                </a>

                <a href="{{ route('dosen') }}" wire:navigate.hover class="flex items-center gap-3 p-3 rounded-xl border border-zinc-100 dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-750 transition-colors">
                    <span class="text-amber-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /></svg>
                    </span>
                    <div class="text-left">
                        <p class="text-sm font-semibold text-zinc-800 dark:text-zinc-200">Kelola Data Dosen</p>
                        <p class="text-xs text-zinc-500">Perbarui profil dosen & staf</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Lecturers List -->
        <div class="bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-2xl p-6 lg:col-span-2">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-bold text-zinc-900 dark:text-white">Dosen Terbaru</h2>
                <a href="{{ route('dosen') }}" wire:navigate.hover class="text-xs font-semibold text-blue-600 dark:text-blue-400 hover:underline">
                    Lihat Semua &rarr;
                </a>
            </div>
            
            @if($recentDosen->isEmpty())
                <div class="flex flex-col items-center justify-center py-8 text-zinc-400 dark:text-zinc-500 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2" /></svg>
                    Belum ada data dosen terdaftar.
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-zinc-500 dark:text-zinc-400">
                        <thead class="text-xs text-zinc-700 dark:text-zinc-300 uppercase bg-zinc-50 dark:bg-zinc-750">
                            <tr>
                                <th scope="col" class="px-4 py-3">Nama</th>
                                <th scope="col" class="px-4 py-3">NIDN</th>
                                <th scope="col" class="px-4 py-3">Program Studi</th>
                                <th scope="col" class="px-4 py-3">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                            @foreach($recentDosen as $dosen)
                                <tr class="bg-white dark:bg-zinc-800 hover:bg-zinc-50 dark:hover:bg-zinc-750 transition-colors">
                                    <td class="px-4 py-3 font-medium text-zinc-900 dark:text-white flex items-center gap-3">
                                        @if($dosen->photo_url)
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ asset('storage/' . $dosen->photo_url) }}" alt="{{ $dosen->name }}">
                                        @else
                                            <div class="h-8 w-8 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center font-bold text-xs">
                                                {{ substr($dosen->name, 0, 2) }}
                                            </div>
                                        @endif
                                        <div>
                                            <p class="font-semibold">{{ $dosen->name }}</p>
                                            <p class="text-xs text-zinc-400">{{ $dosen->email }}</p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $dosen->nidn ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $dosen->prodi?->name ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 dark:bg-blue-950 text-blue-800 dark:text-blue-200">
                                            {{ $dosen->title ?? 'Dosen' }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>

