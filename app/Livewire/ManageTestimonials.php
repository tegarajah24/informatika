<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;

class ManageTestimonials extends Component
{
    public $testimonial_id, $name, $content;

    public function render()
    {
        $testimonials = Testimonial::all();
        return view('livewire.manage-testimonials', compact('testimonials'))
            ->layout('layouts.app', ['header' => 'Manage Testimonials']);
    }

    public function create()
    {
        $this->reset('name', 'content', 'testimonial_id');
        $this->resetValidation();
    }

    public function edit($id)
    {
        $this->resetValidation();
        $testimonial = Testimonial::findOrFail($id);
        $this->testimonial_id = $id;
        $this->name = $testimonial->name;
        $this->content = $testimonial->content;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        Testimonial::updateOrCreate(['id' => $this->testimonial_id], [
            'name' => $this->name,
            'content' => $this->content
        ]);

        $this->dispatch('close-modal');
        $this->reset('name', 'content', 'testimonial_id');
        session()->flash('message', 'Testimonial saved successfully.');
    }

    public function delete($id)
    {
        Testimonial::findOrFail($id)->delete();
        session()->flash('message', 'Testimonial deleted successfully.');
    }
}
