@extends('layouts.header')
@section('title', 'About')
@section('content')
   <!-- ---------------------------------------- ABOUT FIRST SECTION ---------------------------------------- -->
   <div class="services-home-bg ">
        <div class="container m-auto text-center">
            <h2>About Us</h2>

            <ul>
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>

    </div>
    <div class="about-page-container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-12 p-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/hospital.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/hospital1.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/hospital2.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-12 p-5">
                    <h3>Overview</h3>
                    <p>Founded in 2000, Doctors Hospital is an internationally renowned 250-bed hospital located in
                        Lahore,
                        Pakistan. For more than 18 years we have been fulfilling the medical needs of our community.
                        Doctors
                        Hospital is continually improving the scope of services and skills available within the country.
                        Our
                        staff of American and British Board certified doctors provide a full spectrum of treatment and
                        preventative services. Our nurses and support staff are committed to your wellbeing. Our
                        services
                        are designed to provide the most comprehensive benefits to patients from all walks of life.

                        Since we opened our doors, close to 2 million people from all over Pakistan and abroad have come
                        to
                        Doctors Hospital for inpatient and outpatient treatment thanks to our excellence in health care.
                    </p>
                    <h3>Objectives</h3>
                    <p>In 1996, a small group of doctors with decades of experience practicing in the united states held
                        a retreat in pennsylvania to discuss the creation of a medical facility in pakistan. these
                        initial doctors undertook the responsibility of moving back to pakistan & building an
                        institution with the goal of bettering medical care within the country</p>
                    <h3>Comprehensive Services</h3>
                    <ul>
                        <li>24-hour emergency medical care</li>
                        <li>A full-time staff of US and UK board-certified physicians</li>
                        <li>Visiting physicians from the US and UK</li>
                        <li>Fully digital imaging center with nuclear medicine, mammography, CT, X-ray, MRI, and
                            ultrasound</li>
                        <li>More than 25 Medical and Surgical specialties</li>
                        <li>A staff of over 650 employees with over 100 consultant doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
