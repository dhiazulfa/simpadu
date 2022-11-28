<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function index(){
        $title = '';
        
        return view('home', [
            "title" => "HALAMAN UTAMA" . $title,
            "active" => "home",
            // "packages" => Package::latest()->filter(request(['category']))->paginate(3)->withQueryString(),
            // "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }
}
