@extends('layouts.header')
@section('title', 'Services')
@section('content')

  <!-- ---------------------------------------- SERVICES FIRST SECTION ---------------------------------------- -->
  <div class="services-home-bg">
    <div class="container m-auto text-center">
      <h2>Our Services</h2>

      <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li>Services</li>
      </ul>

    </div>
  </div>
  <!----------------- ------------------------------------ OUR SERVICES -------------------------------------------- -->
  
  <div class="services-page-container">
    <div class="our-services text-center" id="services-page-our-services">
      <div class="container">
        <h2>Health services <span>we provide</span></h2>
        <div class="row">

          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="service-item">
              <i class="fa fa-stethoscope" id="services-fa" aria-hidden="true"></i>
              <h3>General Surgery</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas
                deserunt repellendus
                quos?</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="service-item">
              <i class="fa fa-heartbeat" id="services-fa" aria-hidden="true"></i>
              <h3>Outpatient Services</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas
                deserunt repellendus
                quos?</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="service-item">
              <i class="fa fa-medkit" id="services-fa" aria-hidden="true"></i>
              <h3>Respiratory Therapy</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas
                deserunt repellendus
                quos?</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="service-item">
              <i class="fa fa-heart" id="services-fa" aria-hidden="true"></i>
              <h3>Cardiac Clinic</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas
                deserunt repellendus
                quos?</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="service-item">
              <i class="fa fa-low-vision" id="services-fa" aria-hidden="true"></i>
              <h3>Vision</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas
                deserunt repellendus
                quos?</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <div class="service-item">
              <i class="fa fa-thermometer-half" id="services-fa" aria-hidden="true"></i>
              <h3>Respiratory Therapy</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas
                deserunt repellendus
                quos?</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
 
@endsection 