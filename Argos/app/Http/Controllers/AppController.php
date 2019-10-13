<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppController extends Controller
{
    // 
    public function index()
    {
        return view('index');
    }

    public function log()
    {
        return view('log');
    }

    public function dedut()
    {
        return view('dedut');
    }

    public function list()
    {
        $sql = DB::select("SELECT * FROM teste");
        return view('list')->with('sql', $sql);
    }
}




