@extends('layouts.header')
@section('title', 'Book Appointment')
@section('content')
<div class="services-home-bg">
  <div class="container m-auto text-center">
    <h2>Book an Appointment</h2>
  </div>
</div>

<div class="contact-form my-5">
  <div class="container">
    @if($message = Session::get('message'))
    <div class="alert alert-success alert-dismissible fade show col-sm-6 m-auto" role="alert">
      <strong>Thank you!</strong> {{ $message }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <br>
    @endif
    <div class="col-sm-6 m-auto">
      <form action="{{route('saveAppointments')}}" method="post">
      @csrf
        <div class="form-group">
          <label for="exampleInputName">Name *</label>
          <input type="text" class="form-control" id="exampleInputName"  name="name" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email Address *</label>
          <input type="email" class="form-control" id="exampleInputEmail1"  name="email" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Address *</label>
          <input type="text" class="form-control" id="exampleInputName"  name="address" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Phone No *</label>
          <input type="text" class="form-control" id="exampleInputName"  name="phone" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message *</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="State your appointment request here with preferred date below."  name="message" required></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Date *</label>
          <input type="date" class="form-control" id="exampleInputName"  name="date" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection