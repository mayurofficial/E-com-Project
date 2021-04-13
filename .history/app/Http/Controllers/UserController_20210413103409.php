<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illulimate\Support\Facades\Hash;
class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if($user || Hash::check($req))
    }
}
