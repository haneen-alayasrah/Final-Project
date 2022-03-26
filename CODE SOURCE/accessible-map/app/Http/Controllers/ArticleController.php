<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Articlecomment;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;

class ArticleController extends Controller
{
    public function index()
    {
    $article = Article::all();
    return view('layouts.article.article' , compact('article'));
    }
    
    public function show($article_id)
    {
    $article = Article::find($article_id);

    $articlecomment = Articlecomment::find($article_id);

    return view('layouts.article.show' , compact('article' ,'articlecomment'));
    }

    public function store(CommentFormRequest $request, $article_id)
    {
        if(Auth::check())
        {
            $data = $request->validated();

            $comment = new Articlecomment;
            $comment->comment = $data['comment'];
            $comment->user_id = Auth::user()->id;
            $comment->article_id = $article_id;
            $comment->username = Auth::user()->name;
    
    
            $comment->save();
    
            return redirect()->back()->with('message','comment Add Successfuly');
        }
        else
        {
            return  redirect('login')->with('message','Login First To Comment');

        }

    }
    public function destroy($article_id)
    {
        $articlecomment = Articlecomment::find($article_id);
        if($articlecomment)
        {
            $articlecomment->delete();
            return redirect()->back()->with('message','Comment Deleted Successfuly');
        }
        else
        {
            return redirect()->back()->with('message','No Comment ID Found ');

        }

    }

}
