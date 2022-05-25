<style>
    * {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
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

              <form  class="example" action="/search" method="GET" >
                      <input type="text" placeholder="Search.." name="search" required> 
                    <input type="Submit" Value="Search"><i class="fa fa-search"></i></input>
               </form>
                
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
                    <a href="{{url ('/addtocart',$product->id) }}"class="btn btn-success "  >Rent </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>



<!-- Modal -->

</script>









@endsection