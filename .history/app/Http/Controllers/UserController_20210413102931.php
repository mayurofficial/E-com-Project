<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UserController extends Controller
{
    function login(Request $req)
    {
        return User::where(['email'=>$req->email])
    }
}
