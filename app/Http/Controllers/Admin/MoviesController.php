<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Movie;
use App\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Input;

class MoviesController extends Controller
{
    public function index() {
        return view("admin.layouts.contents.movies.movies_table", ["movies" => Movie::all()]);
    }

    public function detail($id) {
        return view("admin.layouts.contents.movies.movie_detail", ["movie" => Movie::find($id)]);
    }

    public function addIndex() {
        return view("admin.layouts.contents.movies.movie_add");
    }

    public function add(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:25',
            'year' => 'required',
            'country' => 'required',
            'length' => 'required',
            'producer' => 'required',
            'starting' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        $movie = new Movie();

        $movie -> title = $request -> title;
        $movie -> year = $request -> year;
        $movie -> country = $request -> country;
        $movie -> length = $request -> length;
        $movie -> producer = $request -> producer;
        $movie -> starting = $request -> starting;
        $movie -> desc = $request -> desc;


//        if( $request->hasFile('image') ) {
//            $file = $request->file('image');
//            dd($file);
//            $file -> move(public_path("loaded_images"), $request -> image);
//            $movie -> image_url = "/loaded_images/" + $request -> image;
//
//        }
        $movie -> image_url = $request -> image;
        $movie -> save();

        return redirect("/admin/movies");
    }

    public function editIndex($id) {
        return view("admin.layouts.contents.movies.movie_edit", ["movie" => Movie::find($id)]);
    }

    public function edit(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required|max:25',
            'year' => 'required',
            'country' => 'required',
            'length' => 'required',
            'producer' => 'required',
            'starting' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        $movie = Movie::find($id);

        $movie -> title = $request -> title;
        $movie -> year = $request -> year;
        $movie -> country = $request -> country;
        $movie -> length = $request -> length;
        $movie -> producer = $request -> producer;
        $movie -> starting = $request -> starting;
        $movie -> desc = $request -> desc;
        $movie ->image_url = $request -> image;

        $movie -> save();

        return redirect("/admin/movies/");
    }

    public function delete($id) {
        Movie::find($id)->forceDelete();
        return redirect("/admin/movies");
    }
}
