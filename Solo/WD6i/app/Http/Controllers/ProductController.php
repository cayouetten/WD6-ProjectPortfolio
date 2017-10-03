<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;
use App\Cart;
use App\Order;
use App\WishList;
use Stripe\Stripe;
use Stripe\Charge;

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
<<<<<<< HEAD
=======

>>>>>>> checkout
    	return redirect()->route('product/home');
    }

    public function getRemoveFromCart(Request $request, $id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->remove($id);

<<<<<<< HEAD
        Session::put('cart', $cart);
=======
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product/shoppingCart');
    }

    public function getRemoveAllCartItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->removeAllCartItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
>>>>>>> checkout

        return redirect()->route('product/shoppingCart');
    }

    public function getCart(){
    	if(!Session::has('cart')){
    		return view('shop/shopping-cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shop/shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop/shopping-cart');
        }
<<<<<<< HEAD
=======

>>>>>>> checkout
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop/checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('shop/shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_DDLW5EejwncG79AWqazlSXjg');
        try{
            $charge = Charge::create(array(
                'amount' => $cart->totalPrice * 100,
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Test charge'
            ));

            $order = new Order();
            $order->cart = serialize($cart);
            $order->name = $request->input('name');
            $order->address = $request->input('address');
            $order->payment_id = $charge->id;

<<<<<<< HEAD
            Auth::user()->orders()->save($orders);
=======
            Auth::user()->orders()->save($order);
>>>>>>> checkout

        } catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('product/home')->with('success', 'Checkout Success');
    }

    public function getAddToWishList(Request $request, $id){
        $product = Product::find($id);

        $oldWishList = Session::has('wishList') ? Session::get('wishList') : null;

        $wishList = new WishList($oldWishList);
        $wishList->add($product, $product->id);

        $request->session()->put('wishList', $wishList);
        return redirect()->route('product/home');
    }

<<<<<<< HEAD
=======
    public function getAddToCartFromWishlist(Request $request, $id){
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        $oldWishList = Session::has('wishList') ? Session::get('wishList') : null;

        $wishList = new WishList($oldWishList);
        $wishList->remove($id);

        if(count($wishList->items) > 0){
            Session::put('wishList', $wishList);
        } else {
            Session::forget('wishList');
        }

        return redirect()->route('product/shoppingCart');
    }

>>>>>>> checkout
    public function getRemoveFromWishList(Request $request, $id){
        $oldWishList = Session::has('wishList') ? Session::get('wishList') : null;

        $wishList = new WishList($oldWishList);
        $wishList->remove($id);

<<<<<<< HEAD
        Session::put('wishList', $wishList);
=======
        if(count($wishList->items) > 0){
            Session::put('wishList', $wishList);
        } else {
            Session::forget('wishList');
        }
>>>>>>> checkout
        
        return redirect()->route('product/wishList');
    }

<<<<<<< HEAD
=======
    public function getRemoveAllWishlistItem($id){
        $oldWishList = Session::has('wishList') ? Session::get('wishList') : null;

        $wishList = new WishList($oldWishList);
        $wishList->removeAllWishlistItem($id);

        if(count($wishList->items) > 0){
            Session::put('wishList', $wishList);
        } else {
            Session::forget('wishList');
        }

        return redirect()->route('product/wishList');
    }

>>>>>>> checkout
    public function getWishList(){
        if(!Session::has('wishList')){
            return view('shop/wish-list');
        }
        $oldWishList = Session::get('wishList');
        $wishList = new WishList($oldWishList);
        return view('shop/wish-list', ['products' => $wishList->items, 'totalPrice' => $wishList->totalPrice]);
    }
}
