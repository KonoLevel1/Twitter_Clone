<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return 'UsersController - index';
    }
    public function show($user_id)
    {
        return 'UsersController - show USER_ID = '.$user_id;
    }
}
