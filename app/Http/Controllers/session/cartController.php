<?php

namespace App\Http\Controllers\session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cartController extends Controller
{
    //
    public function showCart(){
        $cart = session()->get('cart',[]);
        return view('application.checkOut',compact('cart'));
    }

    public function addToCart(Request $request){
        $cart = session()->get('cart',[]);
        $productImage = request->input('productImage');
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        $price = $request->input('price');
        $quantity = $request->input('quanitity',1);
        //checking if product is already added into the cart by abhay
        if(isset($cart[$productId])){
            $cart[$productId]['quanitity'] += $quantity;
        }else{
            $cart[$productId] = [
                'productImage'=>productImage,
                'name' => $productName,
                'price'=>$price,
                'quantity'=>$quantity,
            ];
        }
        session(['cart'=>$cart]);
        return response()->json(['message'=>'product added to cart','cart'=>$cart]);
    }

    public function updateCart(){
        $cart = session()->get('cart',[]);
        foreach($request->input('cart',[]) as $productId => $data){
            if(isset($cart[$productId])){
                $cart[$productId]['quanitity']=$data['quanitity'];
            }
        }
        session(['cart'=>$cart]);
        return redirect()->back()->with('success','cart updated successfully');
    }

    // public function clearCart(){
    //     session()->forget('cart');
    //     return redirect()->back()->with('message','cart cleared');
    // }
}
