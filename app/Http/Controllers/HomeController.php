<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user   = Auth::user();
        switch ($user->level) {
            case 'superadmin':
                return view('superadmin.dashboard');
                break;
            case 'admin':
                return view('admin.dashboard');
                break;
            
            default:
                return view('index');
                break;
        }
    }
    public function list()
    {
        return view('list');
    }
}
