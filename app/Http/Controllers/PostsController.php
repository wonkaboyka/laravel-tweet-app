<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id){
        return "動いているよ、番号は". $id;
    }
}
