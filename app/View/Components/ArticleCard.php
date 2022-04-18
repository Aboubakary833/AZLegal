<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class ArticleCard extends Component
{

    public $uid;
    public $title;
    public $content;
    public $publication_date;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct(Article $article)
    {
        $this->uid = $article->uuid;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->publication_date = date('d/m/Y', strtotime($article->created_at));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.article-card');
    }
}
