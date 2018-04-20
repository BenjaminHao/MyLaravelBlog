<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->id == 1) {
            return view('admin.admin');
        }
        else {
            session()->flash('warning', 'No Authority To Access');
            return view('home');
        }
    }
}
