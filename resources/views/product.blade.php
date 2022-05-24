@extends('master')

@section('content')


<form action="/home "  method="POST" enctype="multipart/form-data" >

        @csrf
  <div class="form-group">
    <label for="exampleInputproduct">Product_Name</label>
    <input type="text" class="form-control" id="exampleInputproduct" name="productname" aria-describedby="emailHelp" placeholder="Product Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product_Title</label>
    <input type="text" class="form-control" id="exampleInputtype" name="producttitle"  placeholder="Product Title">
    
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product_Price</label>
    <input type="number" class="form-control" id="exampleInputquantity"  name="productprice"     placeholder="Product Quantity">
    
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product_Description</label>
    <textarea id="w3review"class="form-control" name="productdescription" id="exampleInputprice" placeholder="Product Description rows="4" cols="50"></textarea>
        
  </div>
  <div class="form-group">
    <label for="exampleInputproduct">Product Image</label>
    <input type="FILE" class="form-control" name="image" id="exampleInputregion" aria-describedby="emailHelp" placeholder="Region">
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>











</form>






@endsection
