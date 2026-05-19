<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use App\Models\Dosen;

class DosenForm extends Form
{
    #[Validate('required|string|min:3')]
    public $name = '';

    #[Validate('required|string|unique:dosens,nidn')]
    public $nidn = '';

    #[Validate('required|email|unique:dosens,email')]
    public $email = '';

    #[Validate('required|string')]
    public $title = ''; // Jabatan

    public function store()
    {
        $this->validate();

        Dosen::create([
            'name' => $this->name,
            'nidn' => $this->nidn,
            'email' => $this->email,
            'title' => $this->title,
        ]);

        $this->reset();
    }
}
