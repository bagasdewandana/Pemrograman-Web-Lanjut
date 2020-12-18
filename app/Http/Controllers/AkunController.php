<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users where id = 1;');
        return view('akun',['users' => $users]);
    }
}
