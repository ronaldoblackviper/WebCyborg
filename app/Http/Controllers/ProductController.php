<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getHome(){
        return view('shop.home');
    }
    
    public function getIndex(){
        $products = Product::all();
        return view('shop.index',['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items)> 0){
            Session::put('cart', $cart);    
        }else{
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }
    
    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)> 0){
            Session::put('cart', $cart);    
        }else{
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart= Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart',['products' => $cart->items, 'totalprice' => $cart->totalprice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalprice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return view('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_f9QwkzCaeMgJN2f8hhuxve3Q001ECzoacG');
        try{
            // $charge = Charge::create(array(
            //     "amount" => $cart->totalprice * 100,
            //     "currency" => "usd",
            //     "source" => $request->input('stripeToken'),
            //     "description" => "Test Charge"
            // ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = 2;

            Auth::user()->orders()->save($order);
        }catch(\exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());  
        }

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }
}
