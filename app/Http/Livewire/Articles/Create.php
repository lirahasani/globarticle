<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithFileUploads;

    public $form = [];

    public function addArticle()
    {
        $this->validate($this->rules());

        $data = $this->getData();

        $data['photo'] = $data['photo']->store('photos', 'public');

        $user = Auth::user();

        $user->article()->create($data);

        session()->flash('message', 'Article added successfully');

        // return redirect to article
    }

    public function render()
    {
        $categories = Category::all();
  
        return view('livewire.articles.create', compact('categories'))
            ->extends('layouts.app');
    }

    public function getData()
    {
        return [
                'title'         => $this->form['title'] ?? '',
                'body'          => $this->form['body'] ?? '',
                'photo'         => $this->form['photo'] ?? '',
                'category_id'   => $this->form['category_id'] ?? ''
        ];
    }

    protected function rules()
    {
        return [
            'form.title'         => 'required|min:3|max:255',
            'form.body'          => 'required|min:3|max:1000',
            'form.photo'         => 'image|max:1024',
            'form.category_id'   => 'required'
        ];
    }
}
