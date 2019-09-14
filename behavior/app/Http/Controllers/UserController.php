<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "<h1> Listagem Funcionando </h1>";
    }

    public function getData()
    {
        return "<h1> Disparou ação 'Get' </h1>";
    }

    public function postData()
    {
        return "<h1> Disparou ação 'Post' </h1>";
    }

    public function testPut()
    {
        return "<h1> Disparou ação 'Put' </h1>";
    }


    public function testPatch()
    {
        return "<h1> Disparou ação 'Patch' </h1>";
    }

    public function testMatch()
    {
        return "<h1> Disparou ação 'Match[Put/Patch]' </h1>";
    }

    public function destroy()
    {
        return "<h1> Disparou ação 'Delete' </h1>";
    }
}
