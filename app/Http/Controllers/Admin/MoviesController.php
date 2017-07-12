<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() {
        return view("admin.layouts.contents.movies.movies_table");
    }

    public function addIndex() {
        return view("admin.layouts.contents.movies.movie_add");
    }
}
