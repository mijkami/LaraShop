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
        $productCute = Product::where('typ', '=', 'chats mignons')->get();
        $productSport = Product::where('typ', '=', 'chats sportifs')->get();
        $productLol = Product::where('typ', '=', 'LOLCATS')->get();
        return view('welcome', compact('product', 'productCute', 'productSport', 'productLol'));
    }
    public function index1()
    {

        $product = Product::where('typ', '=', 'chats mignons')->get();
        return view('pages.products1', compact('product'));
    }

    public function index2()
    {

        $product = Product::where('typ', '=', 'chats sportifs')->get();
        return view('pages.products2', compact('product'));
    }

    public function index3()
    {
        $product = Product::where('typ', '=', 'LOLCATS')->get();
        return view('pages.products3', compact('product'));
    }

}
