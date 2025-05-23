<?php
namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return view('welcome', ['name' => 'World']);
    }

    public function show($id)
    {
        $user = \App\Models\User::find($id);
        return view('user', ['id' => $id, 'user' => $user]);
    }
}