<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;

class ProductController extends Controller
{
    public function index()
    {
        // $product = Product::orderBy('id', 'ASC')->get();
        $productCute = Product::where('typ', '=', 'chats mignons')->get();
        $productSport = Product::where('typ', '=', 'chats sportifs')->get();
        $productLol = Product::where('typ', '=', 'LOLCATS')->get();
        return view('welcome', compact('productCute', 'productSport', 'productLol'));
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

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->image_url
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Produit ajouté à votre panier !');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Produit ajouté à votre panier !');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->image_url
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function viewPDF()
    {
        $product = Product::get();
        return view('pdf', compact('product'));
    }

    public function export_pdf()
    {
        // Fetch all customers from database
        $product = Product::get();
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('pdf', compact('product'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path() . '_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('lolcats.pdf');
    }
}
