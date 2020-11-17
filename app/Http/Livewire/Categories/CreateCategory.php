<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
{
    public $name;

    public function addCategory()
    {
        $data = $this->validate([
            'name' => 'required|min:3|max:255'
        ]);

        Category::create($data);

        $this->name = '';

        session()->flash('message', 'Category added successfully');
    }
    public function render()
    {
        return view('livewire.categories.create-category')->extends('layouts.app');
    }
}
