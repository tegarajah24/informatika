<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed 50 Services
        $services = [
            'Web Development', 'Mobile Application Development', 'UI/UX Design', 
            'IT Consulting', 'Cloud Solutions & Migration', 'Cyber Security Audit', 
            'E-commerce Integration', 'Database Administration', 'DevOps & CI/CD Setup', 
            'System Integration'
        ];
        for ($i = 1; $i <= 50; $i++) {
            $serviceName = $services[($i - 1) % count($services)];
            Service::create([
                'title' => "$serviceName #$i",
                'desc' => "Layanan profesional $serviceName untuk membantu transformasi digital bisnis Anda pada iterasi ke-$i.",
            ]);
        }

        // 2. Seed 50 Portfolios
        $portfolios = [
            'E-Commerce Platform', 'Hospital Information System', 'Mobile Banking App', 
            'Corporate Landing Page', 'School Management Portal', 'IoT Smart Home App', 
            'AI Chatbot Assistant', 'Supply Chain Dashboard', 'HR & Payroll System', 
            'Online Learning Platform'
        ];
        for ($i = 1; $i <= 50; $i++) {
            $portfolioName = $portfolios[($i - 1) % count($portfolios)];
            Portfolio::create([
                'title' => "$portfolioName #$i",
                'image_url' => "https://picsum.photos/400/300?random=$i",
            ]);
        }

        // 3. Seed 50 Testimonials
        $names = [
            'Budi Santoso', 'Siti Rahmawati', 'Dewi Lestari', 'Andi Wijaya', 
            'Eko Prasetyo', 'Rina Astuti', 'Yusuf Maulana', 'Dian Kartika', 
            'Ahmad Fauzi', 'Sri Wahyuni'
        ];
        $companies = [
            'PT Maju Bersama', 'CV Kreatif Sejahtera', 'Tech Startup Indo', 
            'Global Mandiri Corp', 'Lembaga Pendidikan Cerdas'
        ];
        for ($i = 1; $i <= 50; $i++) {
            $name = $names[($i - 1) % count($names)];
            $company = $companies[($i - 1) % count($companies)];
            Testimonial::create([
                'name' => "$name ($company) #$i",
                'content' => "Tim ini sangat responsif dan hasil kerja pada proyek ke-$i melebihi ekspektasi kami. Sangat direkomendasikan!",
            ]);
        }
    }
}
