<?php

namespace App\Http\Controllers\Admin;
use App\Models\Place;
use App\Models\Article;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $places = Place::count();
        $users= User::where('role_as' ,'0')->count();
        $articles = Article::count();
        $admins = User::where('role_as' ,'1')->count();
        $user= User::all();

        return view('admin.dashboard' , compact('users', 'articles', 'admins' , 'places','user'));
    }
}
