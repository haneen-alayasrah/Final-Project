<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Models\City;
use App\Models\Article;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.base');
    }

    public function showdata()
    {
        $type = Type::all();
        $city = City::all();
        
        $article = Article::orderBy('created_at', 'desc')->paginate(4);

       return view('layouts.base' , compact('type' ,'city','article'));
    }

}
