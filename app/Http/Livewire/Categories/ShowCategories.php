<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class ShowCategories extends Component
{
    use WithPagination;
    
    public $category;

    public function show($id)
    {
        $this->category = Category::find($id);
    }

    public function delete()
    {
        $this->category->delete();
 
        session()->flash('message', 'Article deleted successfully');
    }

    public function render()
    {
        $categories = Category::latest()->paginate(3);
        return view('livewire.categories.show-categories', compact('categories'))->extends('layouts.app');
    }
}
