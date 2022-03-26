<?php

namespace App\Http\Controllers\Admin;
use App\Models\Article;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ArticleFormRequest;
class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();

        return View('admin.article.index' , compact('article'));
    }

    public function create()
    {
        return view('admin.article.create');

    }
    public function store(ArticleFormRequest $request)
    {
        $data = $request->validated();

        $article = new Article;
        $article->title = $data['title'];
        $article->article = $data['article'];

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/article/' , $filename);
            $article->image = $filename;
        }
        $article->type= $data['type'];
        $article->meta_title = $data['meta_title'];
        $article->meta_description = $data['meta_description'];
        $article->meta_keyword= $data['meta_keyword'];
        $article->status = $request->status == true ? '1' :'0';
        $article->created_by = Auth::user()->name;
        $article->save();

        return redirect('admin/article')->with('message','Article Add Successfuly');
    }

    public function edit($article_id)
    {
        $article = Article::find($article_id);

        return view('admin.article.edit' , compact('article'));

    }
    public function update(articleFormRequest $request , $article_id)
    {
        $data = $request->validated();
        $article = Article::find($article_id);

        $article->title = $data['title'];
        $article->article = $data['article'];

        if($request->hasfile('image'))
        {
            $destination ='uploads/article/'.$article->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/article/' , $filename);
            $article->image = $filename;
        }  
        $article->type = $data['type'];
        $article->meta_title = $data['meta_title'];
        $article->meta_description = $data['meta_description'];
        $article->meta_keyword= $data['meta_keyword'];
        $article->status = $request->status == true ? '1' :'0';
        $article->update();

        return redirect('admin/article')->with('message','Article Updated Successfuly');
    }

    public function destroy($article_id)
    {
        $article = Article::find($article_id);
        if($article)
        {
            $destination ='uploads/place/'.$article->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $article->delete();
            return redirect('admin/article')->with('message','Article Deleted Successfuly');
        }
        else
        {
            return redirect('admin/article')->with('message','No Article ID Found ');

        }

    }
}
