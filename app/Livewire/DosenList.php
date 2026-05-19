<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use App\Models\Dosen;
use App\Livewire\Forms\DosenForm;

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

    public function render()
    {
        $dosens = Dosen::where(function($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('nidn', 'like', '%' . $this->search . '%')
                ->orWhere('title', 'like', '%' . $this->search . '%');
        })->paginate(5);

        return view('livewire.dosen-list', compact('dosens'))
            ->layout('layouts.app', ['header' => 'Dosen']);
    }
}
