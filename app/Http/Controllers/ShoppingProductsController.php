<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShoppingProduct;

class ShoppingProductsController extends Controller
{
    public function index()
    {
        $products = ShoppingProduct::all();

        return view('shopping', compact('products'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = ShoppingProduct::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        'name' => $product->name,
                        'quantity' => 1,
                        'price' => $product->price,
                        'photo' => $product->photo
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
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

    public function checkout()
    {
        return view('checkout');
    }

    public function submit(Request $request) {
        $checkout_information = [
            'first_name'     => \htmlentities($request->input('firstName'), ENT_QUOTES, 'UTF-8', false),
            'last_name'      => \htmlentities($request->input('lastName'), ENT_QUOTES, 'UTF-8', false),
            'address_1'      => \htmlentities($request->input('address-1'), ENT_QUOTES, 'UTF-8', false),
            'address_2'      => \htmlentities($request->input('address-2'), ENT_QUOTES, 'UTF-8', false),
            'city'           => \htmlentities($request->input('city'), ENT_QUOTES, 'UTF-8', false),
            'state'          => \htmlentities($request->input('state'), ENT_QUOTES, 'UTF-8', false),
            'zip_code'       => \htmlentities($request->input('zipCode'), ENT_QUOTES, 'UTF-8', false),
        ];

        session()->put('checkout_information', $checkout_information);

        return redirect()->action( 'ShoppingProductsController@confirmation' );
    }

    public function confirmation()
    {
        return view('confirmation');
    }
}
