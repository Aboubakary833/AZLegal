<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index() { 
        return view('pages.home');
    }

    public function services() {
        return view('pages.services');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

    public function blog() {
        $articles = Article::all();
        return view('pages.blog', compact('articles'));
    }

    public function article($article_id) {
        $article = Article::where('uuid', $article_id)->first();
        return view('pages.article', compact('article'));
    }

    public function comment(Request $request) {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'comment' => 'required'
        ], ['required' => "Ce champ est obligatoire."]);

        if($validator->failed()) {
            return redirect()->back()->withErrors($validator);
        }

        $article_id = Article::where('uuid', $request->uid)->first()->id;
        $comment_data = [
            'article_id' => $article_id,
            'author' => $request->fullname,
            'content' => $request->comment
        ];
        Comment::create($comment_data);

        return redirect()->back();
    }
}
