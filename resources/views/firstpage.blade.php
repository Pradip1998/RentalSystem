@extends('master')

@section('content')




  <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="{{ asset ('img/bg_image_1.jpg') }}" alt="">
            <div class="img-caption">
              <h1 class="mb-4">UTAS Computer Rental Service</h1>
              
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="{{ asset ('img/bg_image_2.jpg') }}" alt="">
            <div class="img-caption">
              <h1 class="mb-4">UTAS Computer Rental Service</h1>
              
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="{{ asset ('img/bg_image_3.jpg') }}" alt="">
            <div class="img-caption">
              <h1 class="mb-4">UTAS Computer Rental Service</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div> 
  <main>



         <a href="index"><center><h1>Click Here for continue</h1></center></a>



    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
           
            <h2 class="title-section">About Us</h2>

            <p>Since 2000, Computer Rent has been a leading business, computer and audio/visual services company. Privately-owned and local to n Hobart and
Launceston at University of Tasmania (UTAS), we’re positioned and ready to meet the needs of our Students and staff. Our rental products and rental office equipment are available for short-term rentals. Our talented and motivated employees are committed to establishing customer loyalty, 24/7 assistance and quick, efficient and thorough services to make your next event the best possible experience. </p>

           
          </div>
          <div class="col-lg-6 py-3">
            <div class="about-img">
              <img src="{{ asset ('img/about.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> 
	
	<div class="page-section bg-light">
      <div class="container">
        <div class="row align-items-center">
		 <div class="col-lg-6 py-3">
            <div class="about-img">
              <img src="{{ asset ('img/services.jpg') }}" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3">
           
            <h2 class="title-section">Service</h2>

            <p>UTAS Computer Rental Services (UCR) provides computer rental service to staff and students in Hobart and
Launceston at University of Tasmania (UTAS). We provide:
<ul>
<li>PCs</li>
<li>Laptops</li>
<li>Printers</li>
<li>Fax Machines</li>
</ul>


           
          </div>
         
        </div>
      </div>
    </div> 
	
	    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
           
            <h2 class="title-section">Rental Period</h2>

            <p>Customer
can rent the computer minimum 1 hour up to 10 hours maximum (30 minutes interval). Customer must return
the computer within the rental time otherwise the penalty applied.
</p>

           
          </div>
          <div class="col-lg-6 py-3">
            <div class="about-img">
              <img src="{{ asset ('img/rentperiod.jpg') }} " alt="">
            </div>
          </div>
        </div>
      </div>
    </div> 

    
  </main>

 @endsection