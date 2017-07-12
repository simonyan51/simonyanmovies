<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public $users;

    function __construct()
    {
        $this->users = User::all();
    }

    public function index() {
        return view("admin.layouts.contents.users.users_table", ["users" => $this->users]);
    }

    public function editIndex($id) {
        $currentUser = $this -> users -> find($id);
        dd($currentUser);
    }

    public function edit($id) {
        $currentUser = $this -> users -> find($id);
        dd($currentUser);
    }
}
