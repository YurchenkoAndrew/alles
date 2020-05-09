<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Block;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard(){
        $blocks = Block::all();
        return view('admin.dashboard', compact('blocks'));
    }
}
