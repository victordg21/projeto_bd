<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index');
    }
}