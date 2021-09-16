@extends('layouts.header')
@section('title', 'Contact')
@section('content')
<!-- ---------------------------------------- CONTCT US FIRST SECTION ---------------------------------------- -->
<div class="services-home-bg">
  <div class="container m-auto text-center">
    <h2>Contact Us</h2>

    <ul>
      <li><a href="{{route('home')}}">Home</a></li>
      <li>Contact</li>
    </ul>
  </div>
</div>

<!-- ----------------------------------- CONTACT US SECOND SECTION ------------------------------------- -->
<div class="contact-form container">

  <div class="row">
    <div class="col-sm-6">
      <div class="col-12">
        @if($message = Session::get('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ $message }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form action="{{route('saveContact')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter your name here" name="name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email Address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your e-mail here" name="email" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <div class="col-sm-6 text-center contact-form-right">
      <div class="col-12">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
        <h4>Doctor's Hospital, Johar Town Lahore</h4>
        <i class="fa fa-phone" aria-hidden="true"></i>
        <h4>0321-12222345</h4>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <h4>info@hospital.com</h4>
      </div>
    </div>
  </div>
</div>
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13610.478097041252!2d74.2803693!3d31.4796509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc69a4d92168bdf89!2sDoctors%20Hospital%20%26%20Medical%20Center!5e0!3m2!1sen!2s!4v1610479412084!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
@endsection