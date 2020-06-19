<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function codes()
    {
        return view('codes');
    }
    public function faq()
    {
        return view('faq');
    }
    public function icons()
    {
        return view('icons');
    }
    public function mail()
    {
        return view('mail');
    }
    public function products()
    {
        return view('products');
    }
    public function products1()
    {
        return view('products1');
    }
    public function products2()
    {
        return view('products2');
    }
    public function single()
    {
        return view('single');
    }
    
}
