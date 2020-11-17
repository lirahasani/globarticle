<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;
use App\Models\Article;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $article;

    public function show($id)
    {
        $this->article = Article::find($id);
    }

    public function delete()
    {
        $this->article->delete();
 
        session()->flash('message', 'Article deleted successfully');
    }

    public function render()
    {
        $articles = Article::latest()->paginate(4);
        return view('livewire.articles.index', compact('articles'))->extends('layouts.app');
    }
}
