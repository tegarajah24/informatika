<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informatika - Universitas Harapan Bangsa</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=outfit:300,400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
        .gradient-text {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(59, 130, 246, 0.15) 1px, transparent 0);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="antialiased bg-slate-50 text-slate-900 selection:bg-blue-200">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer">
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

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-sm font-semibold text-blue-600 border-b-2 border-blue-600 pb-1">Home</a>
                    <a href="#profil" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors pb-1">Profil</a>
                    <a href="#akademik" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors pb-1">Akademik</a>
                    <a href="#kontak" class="text-sm font-medium text-slate-600 hover:text-blue-600 transition-colors pb-1">Kontak</a>
                    <a href="#daftar" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 rounded-full shadow-md shadow-blue-500/30 transition-all hover:scale-105 active:scale-95">
                        Daftar Kuliah
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button class="text-slate-600 hover:text-blue-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden hero-pattern">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-blue-400/20 blur-3xl filter opacity-60 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-indigo-400/20 blur-3xl filter opacity-60"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-sm font-semibold mb-6 shadow-sm">
                🏆 Program Sarjana (S1) Unggulan
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 tracking-tight mb-8">
                Mencetak Lulusan <br class="hidden md:block"/>
                <span class="gradient-text">Inovator Teknologi</span> Masa Depan
            </h1>
            <p class="mt-4 max-w-2xl text-lg md:text-xl text-slate-600 mx-auto mb-10 leading-relaxed">
                Program Studi Informatika Universitas Harapan Bangsa membekali mahasiswa dengan keterampilan komputasi modern, kecerdasan buatan, dan pengembangan perangkat lunak untuk menjawab tantangan era digital.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="#daftar" class="w-full sm:w-auto px-8 py-4 text-base font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-full shadow-lg shadow-blue-500/40 transition-all hover:-translate-y-1">
                    Daftar Sekarang
                </a>
                <a href="#profil" class="w-full sm:w-auto px-8 py-4 text-base font-bold text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 hover:border-slate-300 rounded-full shadow-sm transition-all hover:-translate-y-1">
                    Pelajari Lebih Lanjut
                </a>
            </div>

            <!-- Stats/Features -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto border-t border-slate-200/60 pt-10">
                <div>
                    <div class="text-3xl font-extrabold text-slate-800">A</div>
                    <div class="text-sm font-medium text-slate-500 mt-1">Akreditasi</div>
                </div>
                <div>
                    <div class="text-3xl font-extrabold text-slate-800">4+</div>
                    <div class="text-sm font-medium text-slate-500 mt-1">Laboratorium Komputer</div>
                </div>
                <div>
                    <div class="text-3xl font-extrabold text-slate-800">95%</div>
                    <div class="text-sm font-medium text-slate-500 mt-1">Lulusan Langsung Kerja</div>
                </div>
                <div>
                    <div class="text-3xl font-extrabold text-slate-800">50+</div>
                    <div class="text-sm font-medium text-slate-500 mt-1">Mitra Industri</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Section -->
    <section id="profil" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-100 to-indigo-50 rounded-3xl transform -rotate-3"></div>
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mahasiswa Koding" class="relative rounded-2xl shadow-xl z-10 w-full object-cover h-[450px]">
                    
                    <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-xl z-20 hidden md:block border border-slate-100">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800">Kurikulum Kampus Merdeka</h4>
                                <p class="text-sm text-slate-500">Berbasis project & industri</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Membangun Karakter IT yang Berdaya Saing Global</h2>
                    <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                        Program Studi S1 Informatika Universitas Harapan Bangsa dirancang khusus untuk memenuhi kebutuhan industri teknologi yang terus berkembang. Kami tidak hanya mengajarkan cara menulis kode, tetapi juga cara memecahkan masalah dengan teknologi.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="ml-3 text-slate-600"><strong class="text-slate-800">Dosen Praktisi:</strong> Dibimbing oleh pengajar yang berpengalaman di industri.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="ml-3 text-slate-600"><strong class="text-slate-800">Fasilitas Modern:</strong> Laboratorium Mac dan PC spesifikasi tinggi.</p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-1 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="ml-3 text-slate-600"><strong class="text-slate-800">Sertifikasi Internasional:</strong> Kesempatan mendapatkan sertifikasi dari vendor IT global.</p>
                        </li>
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
                <p class="text-lg text-slate-600">Kurikulum yang adaptif terhadap perkembangan teknologi terbaru untuk memastikan Anda siap terjun ke dunia profesional.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Software Engineering</h3>
                    <p class="text-slate-600 mb-6">Mempelajari metodologi pengembangan perangkat lunak modern, arsitektur sistem, dan web/mobile development terkini.</p>
                    <a href="#" class="text-blue-600 font-semibold text-sm hover:text-blue-800 flex items-center">
                        Lihat Silabus
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-bl from-indigo-100 to-transparent rounded-bl-full opacity-50"></div>
                    <div class="w-14 h-14 bg-indigo-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 transition-colors relative z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 relative z-10">Artificial Intelligence</h3>
                    <p class="text-slate-600 mb-6 relative z-10">Mendalami konsep Machine Learning, Deep Learning, Computer Vision, dan pemrosesan bahasa alami (NLP).</p>
                    <a href="#" class="text-indigo-600 font-semibold text-sm hover:text-indigo-800 flex items-center relative z-10">
                        Lihat Silabus
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-teal-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-teal-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Cyber Security & Jaringan</h3>
                    <p class="text-slate-600 mb-6">Fokus pada keamanan sistem informasi, kriptografi, ethical hacking, dan manajemen infrastruktur jaringan skala enterprise.</p>
                    <a href="#" class="text-teal-600 font-semibold text-sm hover:text-teal-800 flex items-center">
                        Lihat Silabus
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Daftar Kuliah Section -->
    <section id="daftar" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-blue-600"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 to-indigo-600 opacity-90"></div>
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-white opacity-5 rounded-full blur-3xl transform translate-x-1/3 -translate-y-1/2"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="text-center lg:text-left lg:w-3/5">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Siap Menjadi Bagian dari Masa Depan Digital?</h2>
                    <p class="text-blue-100 text-lg mb-8 max-w-2xl">
                        Pendaftaran mahasiswa baru Tahun Ajaran 2026/2027 telah dibuka. Dapatkan penawaran khusus dan beasiswa bagi pendaftar gelombang pertama.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#" class="px-8 py-4 font-bold text-blue-700 bg-white rounded-full shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all">
                            Daftar Sekarang
                        </a>
                        <a href="#" class="px-8 py-4 font-bold text-white border-2 border-white/30 rounded-full hover:bg-white/10 transition-all">
                            Informasi Beasiswa
                        </a>
                    </div>
                </div>
                
                <div class="w-full lg:w-2/5 max-w-md">
                    <div class="bg-white rounded-2xl p-8 shadow-2xl">
                        <h3 class="text-2xl font-bold text-slate-800 mb-2">Pendaftaran Cepat</h3>
                        <p class="text-sm text-slate-500 mb-6">Tinggalkan kontak, tim Admisi kami akan menghubungi Anda.</p>
                        
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-shadow" placeholder="Masukkan nama Anda">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Nomor WhatsApp</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-shadow" placeholder="0812-xxxx-xxxx">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1">Asal Sekolah</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-shadow" placeholder="SMA / SMK Asal">
                            </div>
                            <button type="button" class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg shadow-md transition-colors mt-2">
                                Minta Info Lengkap
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer / Kontak -->
    <footer id="kontak" class="bg-slate-900 pt-16 pb-8 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="font-bold text-lg text-white">Informatika UHB</h2>
                        </div>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Fakultas Sains dan Teknologi<br>
                        Universitas Harapan Bangsa<br>
                        Jl. Raden Patah No. 100, Purwokerto
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
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
                    <h3 class="font-bold text-white mb-4">Akademik</h3>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Sistem Informasi Akademik (SIA)</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">E-Learning</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Jurnal Informatika</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition-colors">Repository Tugas Akhir</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-bold text-white mb-4">Hubungi Kami</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+62 281 6843472</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>info@uhb.ac.id</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-800 pt-8 mt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-500">
                <p>&copy; {{ date('Y') }} Program Studi Informatika - Universitas Harapan Bangsa. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-slate-300">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
