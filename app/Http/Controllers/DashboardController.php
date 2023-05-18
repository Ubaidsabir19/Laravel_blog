<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class DashboardController extends Controller
{
    public function show_post(){
        $posts = Post::all();
        return view('dashboard', ['posts'=>$posts]  );
      }
}
