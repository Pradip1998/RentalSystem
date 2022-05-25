<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use resources\views\detail;
use App\Product;
use App\cart_product;
use App\Order;
use App\OrderItem;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id=$request->user()->id;
        $products = DB::table('cart_products')->join('Products','cart_products.product_id','=','products.id')->where('cart_products.user_id','=',$user_id)->select('products.*','cart_products.id as cart_id','cart_products.time')->get();
        $sum = DB::table('cart_products')->join('Products','cart_products.product_id','=','products.id')->where('cart_products.user_id','=',$user_id)->sum('Products.product_price');
        $total=0;
        $total=$sum+50+10;      
   
     
        return view('order',['products'=>$products,'sum'=>$sum,'total'=>$total]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        
        

        $user_id=$request->user()->id;
        $products = DB::table('cart_products')->join('Products','cart_products.product_id','=','products.id')->where('cart_products.user_id','=',$user_id)->select('products.*','cart_products.id as cart_id','cart_products.time')->get();
        $sum = DB::table('cart_products')->join('Products','cart_products.product_id','=','products.id')->where('cart_products.user_id','=',$user_id)->sum('Products.product_price');
        $total=0;
        $total=$sum+50+10;


        $order=new Order;
        $order->email=$request->input('email');
        $order->name=$request->input('fullname');
        $order->address=$request->input('inputAddress');
        $order->phonenumber=$request->input('Contact');
        $order->save();
        $user_id=$request->user()->id;
        $cart_product=cart_product::where('user_id',$user_id)->get();
        foreach($cart_product as $value)
        {
            OrderItem::create([
                'order_id'=>$order->id,
                'user_id'=>$user_id,
                'product_id'=>$value->product_id,
                'time'=>$value->time,
                'subtotal'=>$sum ,
                'total'=>$total
            ]);
            
            
        }
        $cart_product=cart_product::where('user_id',$user_id)->get();
        cart_product::destroy($user_id);
        return redirect('/index')->with('message','Order Placed Successfully');
      
            
       
        
    }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('userprofile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
