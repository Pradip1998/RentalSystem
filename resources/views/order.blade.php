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
      <td>Time</td>
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












<form>

  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" value={{ Auth::user()->email  }} placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="name" value="{{ Auth::user()->name  }}"  >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress"  value="{{Auth::user()->address}}">
  </div>
    <div class="form-group col-md-4">
      <label for="inputState">Education</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Master</option>
        <option>Bachelor</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputphone"></label>
      <input type="text" class="form-control" value="{{ Auth::user()->phonenumber}}" >
    </div>
  </div>
  <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
</form>


@endsection