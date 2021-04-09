<?php

namespace App\Http\Controllers;

use App\Models\Children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function childrens($id)
    {
        $childrens = Children::where('group_id', $id)->get();
        return view('childrens', compact('childrens', 'id'));
    }
}
