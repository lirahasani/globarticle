<?php

namespace App\Http\Livewire\Comments;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ShowComments extends Component
{
    public $comments;

    public function mount(Article $article)
    {
        $this->comments = $article->comments;
    }

    public function render()
    {
        return view('livewire.comments.show-comments')->extends('layouts.app');
    }
}
