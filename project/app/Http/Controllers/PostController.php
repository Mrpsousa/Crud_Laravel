<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Semestre routs
     */
    public function sem1()
    {
        return view('sem1');
    }

    public function sem2()
    {
        return view('sem2');
    }

    public function sem3()
    {
        return view('sem3');
    }

    public function sem4()
    {
        return view('sem4');
    }

    public function sem5()
    {
        return view('sem5');
    }

    public function sem6()
    {
        return view('sem6');
    }

    public function sem7()
    {
        return view('sem7');
    }

    public function sem8()
    {
        return view('sem8');
    }

    public function opt()
    {
        return view('opt');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo  "<h1> view Create </h1>";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo  "<h1> view Store </h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        echo  "<h1> view show </h1>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo  "<h1> view edit </h1>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo  "<h1> view update </h1>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo  "<h1> view Delete </h1>";
    }
}
