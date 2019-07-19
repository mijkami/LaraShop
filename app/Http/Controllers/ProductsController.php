<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
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
