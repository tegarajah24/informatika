<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Dosen;

class Dashboard extends Component
{
    public function render()
    {
        $stats = [
            'services' => Service::count(),
            'portfolios' => Portfolio::count(),
            'testimonials' => Testimonial::count(),
            'dosen' => Dosen::count(),
        ];

        // Fetch recent lecturers to display on the dashboard
        $recentDosen = Dosen::with('prodi')->latest()->take(5)->get();

        return view('livewire.dashboard', [
            'stats' => $stats,
            'recentDosen' => $recentDosen,
        ])->layout('layouts.app', ['header' => __('Dashboard')]);
    }
}

