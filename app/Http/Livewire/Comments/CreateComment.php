<?php

namespace App\Http\Livewire\Comments;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Article;

class CreateComment extends Component
{
    public $form = [];
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function addComment()
    {
        $data = $this->validate($this->rules())['form'];

        $user = Auth::user();

        $data['user_id'] = $user->id;

        $this->article->comments()->create($data);

        session()->flash('message', 'Comment added successfully');

        return redirect(route('articles.show', $this->article));
    }

    public function render()
    {
        return view('livewire.comments.create-comment');
    }

    protected function rules()
    {
        return [
            'form.body' => 'required|string|min:3|max:255'
        ];
    }
}
