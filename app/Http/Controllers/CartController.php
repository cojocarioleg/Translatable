<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        $orderId = session('orderId');
        if(!is_null($orderId)){
            $order = Order::findOrFail($orderId);
        }
        return view('web.Cart.index',  compact('order'));
    }

    public function cart_add($id){
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId'=>$order->id]);
        } else{
            $order = Order::find($orderId);
        }

        if ($order->products->contains($id)) {
            $pivotRow = $order->products()->where('product_id', $id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();

        } else {
            $order->products()->attach($id);
        }
        
        
        return redirect()->route('cart'); 
    }

    public function cart_remove($id){
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('cart'); 
        }
        $order = Order::find($orderId);
        if ($order->products->contains($id)) {
            $pivotRow = $order->products()->where('product_id', $id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }  
        } 
        return redirect()->route('cart'); 
    }

    public function confirmOrderView(){
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('home'); 
        }
        $order = Order::find($orderId);

        return view('web.Cart.confirm_order', compact('order'));
    }
    
    public function confirmOrder(){

    }

}
