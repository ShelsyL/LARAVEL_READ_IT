<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller {
  public function index() {
    // Charge une vue
    return view('posts.index');
  }
}
