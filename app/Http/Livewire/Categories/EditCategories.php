<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class EditCategories extends Component
{
    public $form = [];

    public $category;

    public function mount(Category $category)
    {
        $this->category = $category;
        $data = $category->toArray();
        $this->form = $data;
    }

    public function update()
    {
        $data = $this->validate($this->rules())['form'];

        $user = Auth::user();

        $this->category->update($data);

        session()->flash('message', 'Category updated successfully');

        // return redirect(route('livewire.categories.edit-categories', $this->category));
        // return redirect to category
    }

    public function render()
    {
        return view('livewire.categories.edit-categories')->extends('layouts.app');
    }

    public function getData()
    {
        return [
            'name' => $this->form['name'] ?? ''
        ];
    }

    protected function rules()
    {
        $rules = [
            'form.name' => 'required|min:3|max:255'
        ];

        return $rules;
    }
}
