<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\Cart;
use App\WishList;

class ProductController extends Controller
{
    public function getIndex(){
    	$products = Product::all();
    	return view('layouts/index', ['products' => $products]);
    }

    public function getHome(){
        $products = Product::all();
        return view('shop/home', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
    	$product = Product::find($id);

    	$oldCart = Session::has('cart') ? Session::get('cart') : null;

    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	return redirect()->route('product/home');
    }

    public function getCart(){
    	if(!Session::has('cart')){
    		return view('shop/shopping-cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shop/shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getAddToWishList(Request $request, $id){
        $product = Product::find($id);

        $oldWishList = Session::has('wishList') ? Session::get('wishList') : null;

        $wishList = new WishList($oldWishList);
        $wishList->add($product, $product->id);

        $request->session()->put('wishList', $wishList);
        return redirect()->route('product/home');
    }

    public function getWishList(){
        if(!Session::has('wishList')){
            return view('shop/wish-list');
        }
        $oldWishList = Session::get('wishList');
        $wishList = new WishList($oldWishList);
        return view('shop/wish-list', ['products' => $wishList->items, 'totalPrice' => $wishList->totalPrice]);
    }
}
