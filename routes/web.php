<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LandingPage;
use App\Livewire\Dashboard;
use App\Livewire\ManageServices;
use App\Livewire\ManagePortfolios;
use App\Livewire\ManageTestimonials;
use App\Livewire\DosenList;

Route::get('/', LandingPage::class)->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/services', ManageServices::class)->name('services');
    Route::get('/portfolios', ManagePortfolios::class)->name('portfolios');
    Route::get('/testimonials', ManageTestimonials::class)->name('testimonials');
    Route::get('/dosen', DosenList::class)->name('dosen');
});
