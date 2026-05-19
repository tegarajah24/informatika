<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ManageServices extends Component
{
    public $service_id, $title, $desc;

    public function render()
    {
        $services = Service::all();
        return view('livewire.manage-services', compact('services'))
            ->layout('layouts.app', ['header' => 'Manage Services']);
    }

    public function create()
    {
        $this->reset('title', 'desc', 'service_id');
        $this->resetValidation();
    }

    public function edit($id)
    {
        $this->resetValidation();
        $service = Service::findOrFail($id);
        $this->service_id = $id;
        $this->title = $service->title;
        $this->desc = $service->desc;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        Service::updateOrCreate(['id' => $this->service_id], [
            'title' => $this->title,
            'desc' => $this->desc
        ]);

        $this->dispatch('close-modal');
        $this->reset('title', 'desc', 'service_id');
        session()->flash('message', 'Service saved successfully.');
    }

    public function delete($id)
    {
        Service::findOrFail($id)->delete();
        session()->flash('message', 'Service deleted successfully.');
    }
}
