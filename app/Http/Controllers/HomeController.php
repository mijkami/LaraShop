<?php

namespace App\Http\Controllers;
// use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function welcome()
    // {
    //     $product = Product::orderBy('id', 'ASC')->get();
    //     return view('welcome');
    // }
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
        return view('home');
    }
}
