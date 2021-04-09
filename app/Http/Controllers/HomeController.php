<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('main');
    }

    public function groups()
    {
        $groups = Group::all();
        return view('groups', compact('groups'));
    }
}
