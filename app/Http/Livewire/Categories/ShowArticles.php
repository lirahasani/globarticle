<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class ShowArticles extends Component
{
    public $categories;

    public function mount($id)
    {
        $this->categories = Category::find($id);
    }

    public function render()
    {
        return view('livewire.categories.show-articles')->extends('layouts.app');
    }
}
