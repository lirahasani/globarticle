<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    use withFileUploads;

    public $form = [];

    public $article;
    public $photo;

    public function mount(Article $article)
    {
        $this->article = $article;
        $data = $article->toArray();
        $this->form = $data;
    }

    public function update()
    {
        $data = $this->validate($this->rules())['form'];

        if ($photo = $this->photo) {
            $data['photo'] = $photo->store('photos', 'public');
        }

        $user = Auth::user();

        $this->article->update($data);

        session()->flash('message', 'Article updated successfully');

        return redirect(route('articles.edit', $this->article));
        // return redirect to article
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.articles.edit', compact('categories'))->extends('layouts.app');
    }

    public function getData()
    {
        return [
                'title'         => $this->form['title'] ?? '',
                'body'          => $this->form['body'] ?? '',
                'category_id'   => $this->form['category_id'] ?? ''
        ];
    }

    protected function rules()
    {
        $rules = [
            'form.title'        => 'required|min:3|max:255',
            'form.body'         => 'required|min:3|max:1000',
            'photo'             => 'nullable|max:1024',
            'form.category_id'  => 'required'
        ];

        return $rules;
    }
}
