<div class="antialiased bg-slate-50 text-slate-900 selection:bg-blue-200" style="font-family: 'Outfit', sans-serif;">

    <style>
        .glass-nav { background: rgba(255,255,255,0.85); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.3); }
        .gradient-text { background: linear-gradient(135deg,#1e40af 0%,#3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero-pattern { background-image: radial-gradient(circle at 2px 2px, rgba(59,130,246,0.15) 1px, transparent 0); background-size: 32px 32px; }
    </style>

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl leading-tight text-slate-800">Informatika</h1>
                        <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Universitas Harapan Bangsa</p>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-sm font-semibold text-blue-600 border-b-2 border-blue-600 pb-1">Home</a>
                    <a href="#profil" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors pb-1">Profil</a>
                    <a href="#akademik" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors pb-1">Akademik</a>
                    <a href="#kontak" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors pb-1">Kontak</a>
                    <a href="#daftar" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-full shadow-md transition-all hover:scale-105">Daftar Kuliah</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden hero-pattern">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-blue-400/20 blur-3xl opacity-60 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-indigo-400/20 blur-3xl opacity-60"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-sm font-semibold mb-6 shadow-sm">🏆 Program Sarjana (S1) Unggulan</span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-8">
                Mencetak Lulusan <br class="hidden md:block"/>
                <span class="gradient-text">Inovator Teknologi</span> Masa Depan
            </h1>
            <p class="mt-4 max-w-2xl text-lg md:text-xl text-slate-600 mx-auto mb-10 leading-relaxed">
                Program Studi Informatika Universitas Harapan Bangsa membekali mahasiswa dengan keterampilan komputasi modern, kecerdasan buatan, dan pengembangan perangkat lunak.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="#daftar" class="w-full sm:w-auto px-8 py-4 text-base font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-full shadow-lg shadow-blue-500/40 transition-all hover:-translate-y-1">Daftar Sekarang</a>
                <a href="#profil" class="w-full sm:w-auto px-8 py-4 text-base font-bold text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 rounded-full shadow-sm transition-all hover:-translate-y-1">Pelajari Lebih Lanjut</a>
            </div>
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto border-t border-slate-200/60 pt-10">
                <div><div class="text-3xl font-extrabold text-slate-800">A</div><div class="text-sm font-medium text-slate-500 mt-1">Akreditasi</div></div>
                <div><div class="text-3xl font-extrabold text-slate-800">4+</div><div class="text-sm font-medium text-slate-500 mt-1">Laboratorium Komputer</div></div>
                <div><div class="text-3xl font-extrabold text-slate-800">95%</div><div class="text-sm font-medium text-slate-500 mt-1">Lulusan Langsung Kerja</div></div>
                <div><div class="text-3xl font-extrabold text-slate-800">50+</div><div class="text-sm font-medium text-slate-500 mt-1">Mitra Industri</div></div>
            </div>
        </div>
    </section>

    <!-- Profil Section -->
    <section id="profil" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-100 to-indigo-50 rounded-3xl transform -rotate-3"></div>
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=800&q=80" alt="Mahasiswa Koding" class="relative rounded-2xl shadow-xl z-10 w-full object-cover h-[450px]">
                </div>
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Membangun Karakter IT yang Berdaya Saing Global</h2>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">Program Studi S1 Informatika UHB dirancang khusus untuk memenuhi kebutuhan industri teknologi yang terus berkembang.</p>
                    <ul class="space-y-4">
                        <li class="flex items-start"><div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600">✓</div><p class="ml-3 text-slate-600"><strong class="text-slate-800">Dosen Praktisi:</strong> Dibimbing oleh pengajar berpengalaman di industri.</p></li>
                        <li class="flex items-start"><div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600">✓</div><p class="ml-3 text-slate-600"><strong class="text-slate-800">Fasilitas Modern:</strong> Laboratorium Mac dan PC spesifikasi tinggi.</p></li>
                        <li class="flex items-start"><div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600">✓</div><p class="ml-3 text-slate-600"><strong class="text-slate-800">Sertifikasi Internasional:</strong> Kesempatan sertifikasi dari vendor IT global.</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Akademik Section -->
    <section id="akademik" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Konsentrasi & Keunggulan Akademik</h2>
                <p class="text-lg text-slate-600">Kurikulum adaptif terhadap perkembangan teknologi terbaru.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Software Engineering</h3>
                    <p class="text-slate-600">Metodologi pengembangan perangkat lunak modern, arsitektur sistem, dan web/mobile development.</p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-indigo-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Artificial Intelligence</h3>
                    <p class="text-slate-600">Machine Learning, Deep Learning, Computer Vision, dan pemrosesan bahasa alami (NLP).</p>
                </div>
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-teal-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-teal-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Cyber Security & Jaringan</h3>
                    <p class="text-slate-600">Keamanan sistem informasi, kriptografi, ethical hacking, dan manajemen infrastruktur jaringan enterprise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Daftar Section -->
    <section id="daftar" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 to-indigo-600"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="text-center lg:text-left lg:w-3/5">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Siap Menjadi Bagian dari Masa Depan Digital?</h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl">Pendaftaran mahasiswa baru Tahun Ajaran 2026/2027 telah dibuka.</p>
                </div>
                <div class="w-full lg:w-2/5 max-w-md">
                    <div class="bg-white rounded-2xl p-8 shadow-2xl">
                        <h3 class="text-2xl font-bold text-slate-800 mb-2">Pendaftaran Cepat</h3>
                        <p class="text-sm text-slate-500 mb-6">Tinggalkan kontak, tim Admisi kami akan menghubungi Anda.</p>
                        <form wire:submit="submitContact" class="space-y-4">
                            @if (session()->has('contact_success'))
                                <div class="bg-green-100 text-green-700 p-3 rounded-lg text-sm">{{ session('contact_success') }}</div>
                            @endif
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                                <input wire:model.live="name" type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none transition-shadow" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Nomor WhatsApp</label>
                                <input wire:model.live="phone" type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none transition-shadow" placeholder="0812-xxxx-xxxx">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Asal Sekolah</label>
                                <input wire:model.live="school" type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none transition-shadow" placeholder="SMA / SMK Asal">
                            </div>
                            <button type="submit" class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg shadow-md transition-colors mt-2" wire:loading.attr="disabled" wire:target="submitContact">
                                <span wire:loading.remove wire:target="submitContact">Minta Info Lengkap</span>
                                <span wire:loading wire:target="submitContact" class="flex justify-center items-center gap-2">
                                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Memproses...
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="bg-slate-900 pt-16 pb-8 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <h2 class="font-bold text-lg text-white mb-4">Informatika UHB</h2>
                    <p class="text-sm text-slate-400 leading-relaxed">Fakultas Sains dan Teknologi<br>Universitas Harapan Bangsa<br>Jl. Raden Patah No. 100, Purwokerto</p>
                </div>
                <div>
                    <h3 class="font-bold text-white mb-4">Tautan Singkat</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#home" class="hover:text-blue-400 transition-colors">Home</a></li>
                        <li><a href="#profil" class="hover:text-blue-400 transition-colors">Profil Program Studi</a></li>
                        <li><a href="#akademik" class="hover:text-blue-400 transition-colors">Konsentrasi & Akademik</a></li>
                        <li><a href="#daftar" class="hover:text-blue-400 transition-colors">Pendaftaran Mahasiswa Baru</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-white mb-4">Hubungi Kami</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-2"><span>📞</span><span>+62 281 6843472</span></li>
                        <li class="flex items-start gap-2"><span>✉️</span><span>info@uhb.ac.id</span></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-500">
                <p>&copy; {{ date('Y') }} Program Studi Informatika - Universitas Harapan Bangsa. All rights reserved.</p>
            </div>
        </div>
    </footer>

</div>
