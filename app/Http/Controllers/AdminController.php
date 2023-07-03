<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AdminController extends Controller
{
    public function index()
    {
        // logika untuk halaman dashboard admin
        return view('admin.index',[
            'title' => 'admin'
        ]);
    }
    
    public function users()
    {
        // logika untuk halaman pengguna admin
        return view('admin.users');
    }
    
}
