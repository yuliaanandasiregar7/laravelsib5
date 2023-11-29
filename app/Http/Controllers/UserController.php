<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //index
    public function index(){
        $user = DB::table('users')->get();
        return view('admin.user.index', compact('user'));
    }
}
