<?php

namespace charmfarmer\Http\Controllers;

use Illuminate\Http\Request;
use charmfarmer\User;

class UserController extends Controller
{
    public function index()
    {
      $users = User::all();

      return view('users/index', compact('users'));
    }
}
