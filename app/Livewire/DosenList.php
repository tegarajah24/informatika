<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use App\Models\Dosen;
use App\Livewire\Forms\DosenForm;
use Livewire\Attributes\Computed;

class DosenList extends Component
{
    use WithPagination;

    #[Url(as: 'q', history: true)]
    public $search = '';

    public DosenForm $form;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->form->reset();
        $this->resetValidation();
    }

    public function save()
    {
        $this->form->store();
        $this->dispatch('close-modal');
        session()->flash('message', 'Data dosen berhasil disimpan.');
    }

    #[Computed]
    public function dosens()
    {
        return Dosen::with('prodi')->where(function($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('nidn', 'like', '%' . $this->search . '%')
                ->orWhere('title', 'like', '%' . $this->search . '%');
        })->paginate(5);
    }

    #[Computed]
    public function prodis()
    {
        return \App\Models\Prodi::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.dosen-list')
            ->layout('layouts.app', ['header' => 'Dosen']);
    }
}
