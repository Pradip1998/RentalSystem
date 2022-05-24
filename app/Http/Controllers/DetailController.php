<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\cart_product;
use Illuminate\Foundation\Auth ;
use Session;
use Illuminate\Support\Facades\DB;
use resources\views\detail;


class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id=$request->user()->id;
        $products = DB::table('cart_products')->join('Products','cart_products.product_id','=','products.id')->where('cart_products.user_id','=',$user_id)->select('products.*','cart_products.id as cart_id')->get();
        $sum = DB::table('cart_products')->join('Products','cart_products.product_id','=','products.id')->where('cart_products.user_id','=',$user_id)->sum('Products.product_price');
        $total=0;
        $total=$sum+50+10;      
   
     
        return view('cart',['products'=>$products,'sum'=>$sum,'total'=>$total]);

                    
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
    public function store(Request $request, $id)
    {
        $cart_product=new cart_product;
        $cart_product->user_id=$request->user()->id;
        $cart_product->product_id=$id;
        $cart_product->save();
        return redirect('/cart');
        
        
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Product::findOrFail($id);
        return view('detail',[
          'products'=>$products
        ]);
        
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
     
      

     
      

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cart_product::destroy($id);
        return redirect('/cart');
    }


    public function check(Request $request){
        $user_id=$request->user()->id;
        $sum = DB::table('cart_products')->join('Products','cart_products.product_id','=','products.id')->where('cart_products.user_id','=',$user_id)->sum('Products.product_price');
        
        
        
        
        $total=0;
         $totals=$sum+50+10;      
        
        return view('cart',[
            'sum'=>$sum,
            'totals'=>$totals

          ]);


    }




}
