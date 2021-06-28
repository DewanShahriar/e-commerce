<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['title']      = 'Dashboard';
        $data['activeMenu'] = 'dashboard';

        return view('backend.admin.dashboard', $data);
    }

    public function profile()
    {
        $data['title']      = 'Profile';
        $data['activeMenu'] = 'profile';

        return view('backend.admin.profile', $data);
    }
}
