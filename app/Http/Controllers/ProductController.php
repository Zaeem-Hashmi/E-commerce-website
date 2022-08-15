<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function index(){
        $products = Product::all();
        return view("product" , ["products"=> $products]);
    }
    function detail($id){
        $product = Product::find($id);
        return view("detail" ,["product"=> $product]);
    }
    function addToCart(Request $req){
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect("/");
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $user_id = Session::get('user')['id'];
        return cart::where('user_id',$user_id)->count();
    }
    function cartList(){
        $userId = Session::get('user')->id;
        $product = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view("cart",["product"=>$product]);
    }
    function removeCart($id){
        cart::destroy($id);
        return redirect("cartList");
    }
    function orderNow(){
        $userId = Session::get('user')->id;
        $product = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');

        return view('orderNow',['total'=>$product]);
    }
    function orderPlace(Request $req){
        $userId = Session::get('user')->id;
        $allCart = cart::where('user_id',$userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id=$cart->product_id;
            $order->user_id=$cart->user_id;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }
    function order(){
        $userId = Session::get('user')['id'];
        $product = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('order',["product"=>$product]);
    }
}
