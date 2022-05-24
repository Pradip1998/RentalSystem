<style>
    body{

background: #d1d5db;
}

.height{

height: 20vh;
}

.form{

position: relative;
}

.form .fa-search{

position: absolute;
top:2px;
left: 20px;
color: #9ca3af;

}

.form span{

    position: absolute;
right: 17px;
top: 10px;
padding: 2px;
border-left: 1px solid #d1d5db;

}

.left-pan{
padding-left: 7px;
}

.left-pan i{

padding-left: 10px;
}

.form-input{

height: 55px;
text-indent: 33px;
border-radius: 10px;
}

.form-input:focus{

box-shadow: none;
border:none;
}
</style>


@extends('master')
@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <marquee behavior="" direction=""><h1>Welcome the Index page </h1></marquee>



 <div class="container">

            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-6">

                <div class="form">
                  <i class="fa fa-search"></i>
                  <input type="text" class="form-control form-input" placeholder="Search anything...">
                  <span class="left-pan"><i class="fa fa-microphone"></i></span>
                </div>
                
              </div>
              
            </div>
            
          </div>

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



<!-- Modal -->

</script>









@endsection