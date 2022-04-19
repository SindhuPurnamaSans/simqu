<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simqucontroller extends Controller 
{
    public function index()
    {
        return view('simqu');
    }
}