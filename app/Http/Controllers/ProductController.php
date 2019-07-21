<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('id', 'ASC')->get();
        return view('welcome');
    }
    public function index1()
    {
        return view('pages.products1');
    }

    public function index2()
    {
        return view('pages.products2');
    }

    public function index3()
    {
        return view('pages.products3');
    }

}
