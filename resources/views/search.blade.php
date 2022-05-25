@extends('master')
@section('content')


<center><h2>Your Are Searching '{{$search}}' </h1></center>

<div class="container">
    <div class="row">
      @foreach ( $products as $product )

        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="{{ asset ('public/image/'. $product->product_image) }}" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">{{ $product->product_name }}</h4>
                    <p class="card-text">{{ $product->product_description }}</p>
                    <p class="card-text"><small class="text-muted">${{ $product->product_price  }} Per half Hour</small></p>
                    <p class="card-text"><small class="text-muted">{{ $product->created_at  }}</small></p>
                   
                    <a href="{{url ('/detail',$product->id) }}" class="btn btn-primary"  >View Details</a>
                    <a href=""class="btn btn-success "  >Rent </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>











@endsection