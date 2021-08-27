@extends('layouts.header')
@section('title', 'Home')
@section('content')

  <!-- ---------------------------------------- HOME FIRST SECTION ---------------------------------------- -->
  <div class="home-bg">
    <div class="home-color-overlay"></div>
  </div>
  <div class="home-intro container">
    <div class="row">
      <div class="col-lg-6">
        <h1>We Provide High Solutions for Your Health</h1>
        <a href="about.html"><button class="btn btn-dark">About Us</button></a>
      </div>
    </div>
  </div>

  <!-- -------------------------------------------- HOME SECOND SECTION ------------------------------------------- -->
  <div class="home2 container d-flex flex-lg-row flex-column justify-content-between">

    <div class="col-12 col-lg-4 contact-info">
      <div class="row">
        <div class=" col-2 home2-icon ">
          <i class="fa fa-phone"></i>
        </div>
        <div class="col-10">
          <h5 id="home2-h5">Give us a call</h5>
          <h4 id="home2-h4">0321-1234567</h4>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 contact-info">
      <div class="row">
        <div class="col-2 home2-icon">
          <i class="fa fa-envelope"></i>
        </div>
        <div class="col-10">
          <h5 id="home2-h5">Send us a message</h5>
          <h4 id="home2-h4">info@doctorshospital.com</h4>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 contact-info">
      <div class="row">
        <div class="col-2 home2-icon">
          <i class="fa fa-map-marker"></i>
        </div>
        <div class="col-10">
          <h5 id="home2-h5">Visit us</h5>
          <h4 id="home2-h4">Johar Town, Lahore</h4>
        </div>
      </div>
    </div>

  </div>

  <!-- ----------------------------------------------------- ABOUT SECTION ----------------------------------------- -->

  <div class="about container">
    <div class="row">
      <div class="col-lg-6 about-img">
        <img src="images/about.png" width="100%" height="auto" alt="" srcset="">
      </div>
      <div class="col-lg-6 about-text pt-5 pl-lg-5">
        <h5>About Us</h5>
        <h2>We are happy to serve you!</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corporis possimus repudiandae iure
          delectus
          dicta, ipsam dolores enim at doloribus similique quo in consequuntur nemo error modi, quas sint molestias.</p>
        <a href="contact.html"><button class="btn btn-dark contact-us">Contact Us</button></a>
        <a href="about.html"><button class="btn btn-dark read-more">Know More</button></a>
      </div>
    </div>
  </div>

  <!-- ----------------------------------------------------- OUR MISSION ------------------------------------------ -->
  <div class="mission">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mission-text">
          <h5>Our Mission</h5>
          <h2>We provide <span> high solutions</span> for your health</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consequuntur deserunt repellendus
            delectus alias, doloremque, quidem at fugit voluptatibus facilis aliquid non autem enim voluptas!</p>
        </div>
        <div class="col-lg-6">
          <img src="images/mission.jpg" width="100%" height="auto" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>

  <!----------------- ------------------------------------ OUR SERVICES -------------------------------------------- -->

  <div class="our-services text-center ">
    <div class="container">
      <h5>Our Services</h5>
      <h2>Health services <span>we provide</span></h2>
      <div class="row">

        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="service-item">
            <i class="fa fa-stethoscope" id="services-fa" aria-hidden="true"></i>
            <h3>General Surgery</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas deserunt repellendus
              quos?</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="service-item">
            <i class="fa fa-heartbeat" id="services-fa" aria-hidden="true"></i>
            <h3>Outpatient Services</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas deserunt repellendus
              quos?</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="service-item">
            <i class="fa fa-medkit" id="services-fa" aria-hidden="true"></i>
            <h3>Respiratory Therapy</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas deserunt repellendus
              quos?</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="service-item">
            <i class="fa fa-heart" id="services-fa" aria-hidden="true"></i>
            <h3>Cardiac Clinic</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas deserunt repellendus
              quos?</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="service-item">
            <i class="fa fa-low-vision" id="services-fa" aria-hidden="true"></i>
            <h3>Vision</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas deserunt repellendus
              quos?</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <div class="service-item">
            <i class="fa fa-thermometer-half" id="services-fa" aria-hidden="true"></i>
            <h3>Respiratory Therapy</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non incidunt voluptas deserunt repellendus
              quos?</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="team">
    <div class="team-container container text-center">
      <h5>Our Team</h5>
      <h2>Our dedicated <span>doctors</span></h2>
      <div class="card-deck">

        <div class="card" data-toggle="modal" data-target="#exampleModalCenter">
          <img class="card-img-top" src="images/doctor1.jpg" alt="Card image cap">

          <div class="card-body">
            <h5 class="card-title">Dr Jade Guzman</h5>
            <p class="card-text"><small>Cardiologist</small></p>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">About Dr Jade Guzman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-left">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius rerum non necessitatibus reiciendis
                    architecto voluptatibus, ut qui ad, aliquam recusandae illo eveniet perferendis consequuntur iusto
                    modi ex sit? Voluptatum, assumenda.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card" data-toggle="modal" data-target="#exampleModalCenter">
          <img class="card-img-top" src="images/doctor3.jpg" alt="Card image cap">

          <div class="card-body">
            <h5 class="card-title">Dr Jade Guzman</h5>
            <p class="card-text"><small>Cardiologist</small></p>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">About Dr Jade Guzman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-left">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius rerum non necessitatibus reiciendis
                    architecto voluptatibus, ut qui ad, aliquam recusandae illo eveniet perferendis consequuntur iusto
                    modi ex sit? Voluptatum, assumenda.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="card" data-toggle="modal" data-target="#exampleModalCenter">
          <img class="card-img-top" src="images/doctor2.jpg" alt="Card image cap">

          <div class="card-body">
            <h5 class="card-title">Dr Jade Guzman</h5>
            <p class="card-text"><small>Cardiologist</small></p>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">About Dr Jade Guzman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-left">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius rerum non necessitatibus reiciendis
                    architecto voluptatibus, ut qui ad, aliquam recusandae illo eveniet perferendis consequuntur iusto
                    modi ex sit? Voluptatum, assumenda.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="clients text-center">
    <div class="container">
      <h5>What clients say</h5>
      <h2>Happy <span>Patients</span></h2>
      <div class="row">

        <div class="col-md-4 mt-3 mt-sm-0">
          <div class="client-item">
            <div class="client-image"></div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut quaerat sapiente molestias debitis corporis
              inventore aut! Quidem illo, alias aliquam iusto ipsam enim excepturi assumenda?</p>
            <h5>Elizabeth Anderson</h5>
          </div>
        </div>
        <div class="col-md-4 mt-3 mt-sm-0">
          <div class="client-item">
            <div class="client-image"></div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut quaerat sapiente molestias debitis corporis
              inventore aut! Quidem illo, alias aliquam iusto ipsam enim excepturi assumenda?</p>
            <h5>Elizabeth Anderson</h5>
          </div>
        </div>
        <div class="col-md-4 mt-3 mt-sm-0">
          <div class="client-item">
            <div class="client-image"></div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut quaerat sapiente molestias debitis corporis
              inventore aut! Quidem illo, alias aliquam iusto ipsam enim excepturi assumenda?</p>
            <h5>Elizabeth Anderson</h5>
          </div>
        </div>

      </div>
    </div>
  </div>

 
@endsection 