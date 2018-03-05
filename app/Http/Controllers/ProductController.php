<?php

namespace App\Http\Controllers;
use App\Shoppingbasket;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $product = Product::find($id);
        $oldShoppingBasket = Session::has('shoppingbasket') ? Session::get('shoppingbasket') : null;
        $shoppingbasket = new Shoppingbasket($oldShoppingBasket);
        $shoppingbasket->addItem($product, $product->id);
        $request->session()->put('shoppingbasket', $shoppingbasket);
        $request->session()->save();
        return redirect()->route('product.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reduce(Request $request){

        $shoppingbasket = new Shoppingbasket(null);
        $shoppingbasket->reduceItems();
        $request->session()->put('shoppingbasket', $shoppingbasket);
        $request->session()->save();
        return redirect()->route('product.index');
    }

    public function destroy()
    {
        Session::flush();
        return redirect()->route('product.index');
    }
}
