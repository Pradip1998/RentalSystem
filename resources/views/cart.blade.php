
<style>
    body{
    background: #f4f5f7;
    margin-top:20px;
}
.cart-container {
  border: 1px solid rgba(0, 0, 0, 0.05);
  padding: 30px;
}
.cart-container .cart-body {
  border-top: 1px solid rgba(0, 0, 0, 0.05);
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  padding: 30px 0 20px;
  margin: 20px 0 30px;
}
.qty {
        display:flex;
    }
    .qty span {
        background: #ccc;
        font-size: 24px;
        font-weight: 700;
        padding: 5px 8px;
        cursor: pointer;
        border: 1px solid #ccc;
        width: 15px;
        text-align: center;
    }
    .qty input {
        width: 50px;
        padding: 0 5px;
        text-align: center;
        border: 1px solid #ccc;
    }












</style>


@extends('master')

@section('content')





<div class="container">                
<div class="contentbar">                
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div class="cart-container">
                                    <div class="cart-head">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">SN</th>
                                                        <th scope="col">Action</th>                                               
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Hours</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                @foreach( $products as $item  )
                                                
                                                    <tr>
                                                         

                                                        <th scope="row">{{ $loop->iteration }}</th>
                                                        <td>
                                                        <a href="/removecart/{{ $item ->cart_id }}" class="btn btn-danger">*</a>
                                                        
                                                         </td>
                                                        <td><img src="{{ asset ('public/image/'. $item->product_image) }}" class="img-fluid" width="35" alt="product"></td>
                                                        <td>{{ $item->product_name}}</td>
                                                         <td>{{ $item->time}}</td> 
                                                        <td id='price'>{{ $item->product_price}}</td>
                                                        @php  $def=$item->product_price*$item->time;  @endphp



                                                        <td class="text-right"  id="total"  >{{$def}}</td>
                                                        
                                                    </tr>
                                                    
                                                    @endforeach
                                                     
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-body">
                                        <div class="row">
                                            <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                                <div class="order-note">
                                                    <form action="/cart">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="discount" placeholder="Enter Student ID to get Discount" aria-label="Search" aria-describedby="button-addonTags">
                                                                <div class="input-group-append">
                                                                    <input  type="Submit" class="input-group-text" type="submit" id="button-addonTags"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                <div class="order-total table-responsive ">
                                                    <table class="table table-borderless text-right">
                                                        <tbody>
                                                            <tr>
                                                                <td>Sub Total :</td>
                                                                <td>${{$sum}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fixed Deposite :</td>
                                                                <td>$50</td>
                                                            </tr>
                                                            <tr>
                                                                <td id="ins">Insurance :</td>
                                                                <td>$10.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="f-w-7 font-18"><h4>Amount :</h4></td>
                                                                <td class="f-w-7 font-18"><h4>${{$total}}</h4></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-right">
                                        <button type="button" class="btn btn-info my-1"><i class="ri-save-line mr-2"></i>Update Cart</button>
                                        <a href="/order" class="btn btn-success my-1">Proceed to Checkout<i class="ri-arrow-right-line ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    </div>
 
      

<script>
    $(document).ready(function(){
        $('.increment-btn').click(function(e){
            e.PreventDefault();
            var inc_value=$(.'qty-hrs').val();
            var value=parseInt(inc_value,10);
            value= isNaN(value) ? 0 :value;
            if(value<10){
                value++
                $(.'qty-hrs').val(value);
            }

        });

        

    });
</script>

    




@endsection

