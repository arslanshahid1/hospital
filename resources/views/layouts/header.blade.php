<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-icon/flaticon.css')}}">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400&display=swap"
    rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="{{asset('js/script.js')}}"></script>

  <title> @yield('title')</title>
</head>

<body>

  <!-- ------------------------------------------------- NAVBAR ------------------------------------------ -->
  <div class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
      <div class="container"><a href="index.html" class="navbar-brand text-uppercase font-weight-bold">DOCTOR'S
          HOSPITAL</a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
          class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('services')}}">
                Services
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('departments')}}">Departments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item ml-1">
              <a class=" btn btn-warning px-3" href="{{route('book')}}">Book Appointment</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
</div>
@yield('content')

 <!-- ---------------------------------------------------------- FOOTER ------------------------------------------------------ -->
 <footer class="myfooter">
    <div class="container">
      <div class="row">

        <div class="col-sm-3">
          <div class="footer-item">
            <h5>Departments</h5>
            <ul>
              <a href="#">
                <li>X-Ray</li>
              </a>
              <a href="#">
                <li>Children Care</li>
              </a>
              <a href="#">
                <li>Eye Treatment</li>
              </a>
              <a href="#">
                <li>Nose Treatment</li>
              </a>
              <a href="#">
                <li>Surgery</li>
              </a>
            </ul>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="footer-item">
            <h5>Our Services</h5>
            <ul>
              <a href="#">
                <li>X-Ray</li>
              </a>
              <a href="#">
                <li>Children Care</li>
              </a>
              <a href="#">
                <li>Eye Treatment</li>
              </a>
              <a href="#">
                <li>Nose Treatment</li>
              </a>
              <a href="#">
                <li>Surgery</li>
              </a>
            </ul>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="footer-item">
            <h5>Navigation</h5>
            <ul>
              <a href="#">
                <li>Home</li>
              </a>
              <a href="#">
                <li>About Us</li>
              </a>
              <a href="#">
                <li>Customer Care</li>
              </a>
              <a href="#">
                <li>Privacy</li>
              </a>
              <a href="#">
                <li>Terms</li>
              </a>
            </ul>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="footer-item social">
            <h5>Social</h5>
            <ul>
              <a href="#">
                <li><i class="fa fa-facebook"></i></li>
              </a>
              <a href="#">
                <li><i class="fa fa-instagram"></i></li>
              </a>
              <a href="#">
                <li><i class="fa fa-twitter"></i></li>
              </a>
              <a href="#">
                <li><i class="fa fa-linkedin"></i></li>
              </a>
            </ul>
            <h6>Subscribe Newsletter</h6>
            <form class="form-inline">
              <div class="form-group mb-2">
                <input type="email" class="form-control-plaintext emailinput" id="staticEmail2"
                  placeholder="Enter E-mail">
              </div>
              <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </footer>



</body>

</html>