<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class LatestArticles extends Component
{
    public function render()
    {
        $articles = Article::latest()->take(2)->get();

        return view('livewire.latest-articles', compact('articles'))->extends('layouts.app');
    }
}
