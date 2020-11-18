<?php

namespace App\Http\Livewire\Tag;

use Livewire\Component;
use App\Models\Tag;

class ShowTagArticles extends Component
{
    public $tag;

    public function mount($id)
    {
        $this->tag = Tag::find($id);
    }
    
    public function render()
    {
        return view('livewire.tag.show-tag-articles')->extends('layouts.app');
    }
}
