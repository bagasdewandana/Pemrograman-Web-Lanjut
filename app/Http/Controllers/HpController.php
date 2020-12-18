<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HpController extends Controller
{
    public function index()
    {
    	// mengambil data dari table hp
        $hp = DB::select('select * from hp where idhp = 2;');
 
    	// mengirim data hp ke view Hp1pro
        return view('hp1pro',['hp' => $hp]);
    }
    public function index2()
    {
        $hp = DB::select('select * from hp where idhp = 1;');
        return view('hp2pro',['hp' => $hp]);
    }
    public function index3()
    {
        $hp = DB::select('select * from hp where idhp = 3;');
        return view('hp3pro',['hp' => $hp]);
    }
    public function index4()
    {
        $hp = DB::select('select * from hp where idhp = 4;');
        return view('hp4pro',['hp' => $hp]);
    }
    public function index5()
    {
        $hp = DB::select('select * from hp where idhp = 5;');
        return view('hp5pro',['hp' => $hp]);
    }
    public function index6()
    {
        $hp = DB::select('select * from hp where idhp = 6;');
        return view('hp6pro',['hp' => $hp]);
    }
    public function index7()
    {
        $hp = DB::select('select * from hp where idhp = 7;');
        return view('hp7pro',['hp' => $hp]);
    }
    public function index8()
    {
        $hp = DB::select('select * from hp where idhp = 8;');
        return view('hp8pro',['hp' => $hp]);
    }
}
