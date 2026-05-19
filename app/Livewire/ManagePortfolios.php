<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Portfolio;

class ManagePortfolios extends Component
{
    public $portfolio_id, $title, $image_url;

    public function render()
    {
        $portfolios = Portfolio::all();
        return view('livewire.manage-portfolios', compact('portfolios'))
            ->layout('layouts.app', ['header' => 'Manage Portfolios']);
    }

    public function create()
    {
        $this->reset('title', 'image_url', 'portfolio_id');
        $this->resetValidation();
    }

    public function edit($id)
    {
        $this->resetValidation();
        $portfolio = Portfolio::findOrFail($id);
        $this->portfolio_id = $id;
        $this->title = $portfolio->title;
        $this->image_url = $portfolio->image_url;
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'image_url' => 'nullable|string',
        ]);

        Portfolio::updateOrCreate(['id' => $this->portfolio_id], [
            'title' => $this->title,
            'image_url' => $this->image_url
        ]);

        $this->dispatch('close-modal');
        $this->reset('title', 'image_url', 'portfolio_id');
        session()->flash('message', 'Portfolio saved successfully.');
    }

    public function delete($id)
    {
        Portfolio::findOrFail($id)->delete();
        session()->flash('message', 'Portfolio deleted successfully.');
    }
}
