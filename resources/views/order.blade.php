@extends('master')
@section('content')

<center><h1>Order Form</h1></center> 
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Image</th>
      <th scope="col">Product</th>
      <th scope="col">Time</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $products as $item  )
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td><img src="{{ asset ('public/image/'. $item->product_image) }}" class="img-fluid" width="35" alt="product"></td>
      <td>{{ $item->product_name}}</td>
      <td>{{$item->time}}</td>
      <td>{{ $item->product_price}}</td>
    </tr>
@endforeach 
<tr>
  <th colspan="4" class="text-right">Sub-Total:</th>
  <th>${{$sum}}</th>
</tr>
<tr>
  <th colspan="4" class="text-right">Total with Insurance and Fixed Deposite:</th>
  <th>${{$total}}</th>
</tr>
  </tbody>
</table>












<form action="/success" method="GET"  enctype="multipart/form-data" >

  @csrf

  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" value={{ Auth::user()->email  }} placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" name="fullname" value="{{ Auth::user()->name  }}"  >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="inputAddress"  value="{{Auth::user()->address}}">
  </div>
   
    <div class="form-group col-md-2">
      <label for="inputphone">Contact Number</label>
      <input type="text" class="form-control" name="Contact" value="{{ Auth::user()->phonenumber}}" >
    </div>
  </div>
  <input type="Submit" value="Order" class="btn btn-success">  
</form>



@endsection