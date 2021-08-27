@extends('layouts.header')
@section('title', 'Departments')
@section('content')
  <!-- ---------------------------------------- DEPARTMENTS FIRST SECTION ---------------------------------------- -->
  <div class="services-home-bg">
    <div class="container m-auto text-center">
      <h2>Departments</h2>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li>Departments</li>
      </ul>
    </div>
  </div>
  <!----------------- ------------------------------------ OUR DEPARTMENTS -------------------------------------------- -->
  <div class="services-page-container">
    <div class="our-services our-departments text-center" id="services-page-our-services">
      <div class="container">
        <h2>The Departments at <span>Medically</span></h2>
        <div class="row">
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-stethoscope" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-kidneys"></i>

                <h3>Kidney Transplant</h3>
                <p>Medically now providing regular services of urology and kidney transplant with dedicated, highly
                  qualified and experienced surgical and nephrological team</p>
              </div>
            </a>
          </div>

          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-heartbeat" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-chat"></i>

                <h3>Speech Therapist</h3>
                <p>Speech-language pathologists (SLPs) provide a wide range of services, mainly on an individual basis,
                  but also as support for individuals, families, support groups, and providing information for the
                  general
                  public.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-medkit" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-chest-pain"></i>
                <h3>Pulmonology</h3>
                <p>Pulmonology is a medical speciality that deals with diseases involving the respiratory tract.
                  Pulmonology is known as chest medicine and respiratory medicine in some countries and areas.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-heart" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-blood-test"></i>
                <h3>Pathology</h3>
                <p>Established in 2015, the newly upgraded Doctors Hospital & Medical Center Pathology & Laboratory
                  department fostered a reputation among the area's private medical practitioners as a provider of
                  prompt,
                  reliable and convenient laboratory testing services.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-low-vision" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-nerves"></i>
                <h3>Vascular Surgery</h3>
                <p>Vascular surgery is a surgical subspecialty in which diseases of the vascular system, or arteries and
                  veins, are managed by medical therapy, minimally-invasive catheter procedures, and surgical
                  reconstruction.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-thermometer-half" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-medical-equipment"></i>
                <h3>Hemathology & Oncology</h3>
                <p>Hematology is the study of blood in health and disease. It includes problems with the red blood
                  cells,
                  white blood cells, platelets, blood vessels, bone marrow, lymph nodes, spleen, and the proteins
                  involved
                  in bleeding and clotting (hemostasis and thrombosis).</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-thermometer-half" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-scalpel"></i>
                <h3>General Surgery</h3>
                <p>At Doctors Hospital our general surgery department is made up of skilled and respected professionals
                  that focus on abdominal contents including esophagus, stomach, small bowel, colon, liver, pancreas,
                  gallbladder and bile ducts, and often the thyroid gland.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-thermometer-half" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-surgery-room"></i>
                <h3>Cardiac Surgery</h3>
                <p>The Cardiac Surgery Department of Doctors Hospital & Medical Centre Lahore aims to provide the
                  highest
                  quality of Cardiac Surgical Care to its patients in accordance with international standards of
                  excellence at an affordable price.</p>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4">
            <a href="{{route('departmentDetails')}}">
              <div class="service-item">
                <!-- <i class="fa fa-thermometer-half" id="services-fa" aria-hidden="true"></i> -->
                <i class="flaticon flaticon-x-ray"></i>
                <h3>Radiology</h3>
                <p>Doctors Hospital recognizes the importance of offering the most advanced radiology services
                  available.
                  Imaging procedures are among the most valuable tools our physicians have in the diagnosis and
                  treatment
                  of illness or injury.</p>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection
