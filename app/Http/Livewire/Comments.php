<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $post;
    public $comments;
    public $commentCount = 0;
    public $comment = '';

    function mount($post)
    {
        $this->post = $post;
        $this->comments = $post->comments;
        $this->commentCount = $post->comments_count;
    }
    public function save()
    {
        $this->validate([
            'comment' => 'required|string|min:3|max:500',
        ]);
        $this->post->comments()->create(
            [
                'user_id' => userId(),
                'comment' => $this->comment,
            ]
        );
        $this->comments->push($comment);
        $this->commentCount++;
        $this->comment = '';
        session()->flash('message','The comment is succefully created');
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
