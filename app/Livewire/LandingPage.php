<?php

namespace App\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public $name = '';
    public $phone = '';
    public $school = '';

    public function submitContact()
    {
        $this->reset('name', 'phone', 'school');
        session()->flash('contact_success', 'Terima kasih, data Anda telah kami terima!');
    }

    public function render()
    {
        return view('livewire.landing-page')
            ->layout('layouts.landing');
    }
}
