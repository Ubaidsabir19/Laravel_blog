<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class HomeController extends Controller
{
    public function show_post(){
        $posts = Post::all();
        return view('home', ['posts'=>$posts]  );
      }
}
