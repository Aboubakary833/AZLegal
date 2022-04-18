<?php

namespace App\View\Components;

use App\Models\Comment as ModelsComment;
use Illuminate\View\Component;

class Comment extends Component
{

    public $author;
    public $content;
    public $comment_date;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ModelsComment $data)
    {
        $this->author = $data->author;
        $this->content = $data->content;
        $this->comment_date = date('d/m/Y', strtotime($data->created_at));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment');
    }
}
