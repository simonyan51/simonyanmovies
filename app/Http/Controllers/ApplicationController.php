<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ApplicationController extends Controller
{
    public function runApp(){
        return File::get('moviesapp/dist/index.html');
    }
}
