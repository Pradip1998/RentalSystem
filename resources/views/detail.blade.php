@extends('master')
@section('content')

<img src="{{ asset ('public/image/'. $products->product_image) }}" class="img-fluid" alt="Responsive image">
<h3 class="card-title">{{ $products->product_title }}</h4>
<h4 class="card-title">{{ $products->product_name }}</h4>
<p class="card-text">{{ $products->product_description }}</p>
<p class="card-text"><small class="text-muted">${{ $products->product_price  }} Per Hour</small></p>
<p class="card-text"><small class="text-muted">{{ $products->created_at  }}</small></p>
<a  href="{{url ('/addtocart',$products->id) }}" class="btn btn-success"  >Add To Rent</a>
<a href="/index" class="btn btn-dark"  >Go Back</a>



                   
            
                
                
@endsection