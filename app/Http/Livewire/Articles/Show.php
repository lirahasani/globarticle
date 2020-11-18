<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;
use App\Models\Article;

class Show extends Component
{
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function render()
    {
        return view('livewire.articles.show')->extends('layouts.app');
    }
}
