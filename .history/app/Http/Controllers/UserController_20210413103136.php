<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class UserController extends Controller
{
    function login(Request $req)
    {
        return users::where(['email'=>$req->email])->first();
    }
}
