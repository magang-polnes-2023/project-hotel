<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use APp\Models\User;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $usertype=Auth()->user()->usertype;

        if($usertype=='user')
        {
            return view('welcome');
        }
        else if($usertype=='admin')
        {
            return view('admin.index');
        }
        else
        {
            return redirect()->back();
        }
    }
}
