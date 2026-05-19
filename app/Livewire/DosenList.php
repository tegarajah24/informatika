<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use App\Models\Dosen;

class DosenList extends Component
{
    use WithPagination;

    #[Url(as: 'q', history: true)]
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $dosens = Dosen::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('nidn', 'like', '%' . $this->search . '%')
            ->orWhere('title', 'like', '%' . $this->search . '%')
            ->paginate(5); // paginated to 5 items to test pagination controls

        return view('livewire.dosen-list', compact('dosens'))
            ->layout('layouts.app', ['header' => 'Dosen']);
    }
}
