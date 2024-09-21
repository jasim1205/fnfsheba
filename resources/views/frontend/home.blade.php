@extends('frontend.layouts.app')
@section('title','FNF-Sheba')
@section('content')
    <!-- Header start -->
    <section class="header-hero">
      <div class="overlay">
        <div class="container pt-4">
          <!-- logo and nav -->
          <div class="row">
            <!-- logo -->
            <div class="col-3">
              <a href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('frontend/asset/image/logo.png')}}" alt="image" />
              </a>
            </div>
            <!-- nav -->
            <div class="col-9 d-flex justify-content-end">
                @include('frontend.layouts.nav')
              {{-- <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                  <li class="nav-item ms-4">
                    <a class="nav-link text-nowrap" href="#"
                      >About Us <i class="bi bi-chevron-down"></i> <br />
                      <span>Business Info</span></a
                    >
                    <ul class="sub-menu-view">
                      <li>
                        <a href="./Who_we_are.html">Who we are ?</a>
                      </li>
                      <li>
                        <a href="./Our-Team.html">Our Team</a>
                      </li>
                      <li>
                        <a href="./Business-Goals.html">Business Goals</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item ms-4">
                    <a class="nav-link text-nowrap" href=""
                      >Our Services <i class="bi bi-chevron-down"></i> <br />
                      <span>Services Info</span></a
                    >
                    <ul class="sub-menu-view text-nowrap">
                      <li>
                        <a href="./Corporate_Services.html"
                          ><i class="bi bi-building-fill-check"></i>Corporate
                          Service</a
                        >
                      </li>
                      <li>
                        <a href="./Individual_Services.html"
                          ><i class="bi bi-person-bounding-box"></i>Individual
                          Service</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item ms-4">
                    <a class="nav-link text-nowrap" href=""
                      >Industries <i class="bi bi-chevron-down"></i> <br />
                      <span>Industries We Serve</span></a
                    >
                    <ul class="sub-menu-view">
                      <li>
                        <a href="./ITES_industry.html">ITES</a>
                      </li>
                      <li>
                        <a href="./Agriculture_industry.html">Agriculture</a>
                      </li>
                      <li>
                        <a href="./Healthcare_industry.html">Healthcare</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item ms-4">
                    <a class="nav-link text-nowrap" href=""
                      >Resources <i class="bi bi-chevron-down"></i> <br />
                      <span>Thought Leadership</span></a
                    >
                    <ul class="sub-menu-view">
                      <li>
                        <a href="./Our_Client.html">Our Clients</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item active-board">
                    <a class="nav-link ms-4 text-nowrap" href="/Contact_Us.html"
                      >Contact Us <br />
                      <span>Information</span></a
                    >
                  </li>
                </ul>
              </nav> --}}
              <!-- mobile Nav -->
              <div class="mobile-nav-icon">
                <i class="bi bi-list" id="mobile-nav-icon"></i>
              </div>
            </div>
          </div>
          <!-- hero -->
          <div class="hero text-white">
            <p>Business Formation | Tax | Legal Advisory</p>
            <p>
              In business for over 5+ years providing personalized Business
              solutions for our clients
            </p>
            <div class="hero-button">
              <a class="d-flex w-50" href="">
                <i class="bi bi-plus"></i>
                <p class="fw-bold">Explore Services</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Header end -->
    <!-- Mobile View Nav start -->
    <section class="sticky-top p-5" id="mobile-nav">
      <div class="row">
        <div class="col-10">
          <ul class="mobile-view-nav">
            @include('frontend.layouts.mobile_nav')
            {{-- <li class="mb-4">
              <a class="text-nowrap mobile-sub-nav-point" href="#"
                >About Us <i class="bi bi-chevron-down"></i> <br />
                <span>Company Info</span></a
              >
              <ul class="mobile-sub-nav">
                <li>
                  <a href="./Who_we_are.html">Who we are ?</a>
                </li>
                <li>
                  <a href="./Our-Team.html">Our Team</a>
                </li>
                <li>
                  <a href="./Business-Goals.html">Business Goals</a>
                </li>
              </ul>
            </li>
            <li class="mb-4">
              <a class="text-nowrap mobile-sub-nav-point" href="#"
                >Our Services <i class="bi bi-chevron-down"></i> <br />
                <span>Services Info</span></a
              >
              <ul class="mobile-sub-nav">
                <li>
                  <a href="./Corporate_Services.html"
                    ><i class="bi bi-building-fill-check"></i>Corporate
                    Service</a
                  >
                </li>
                <li>
                  <a href="./Individual_Services.html"
                    ><i class="bi bi-person-bounding-box"></i>Individual
                    Service</a
                  >
                </li>
              </ul>
            </li>
            <li class="mb-4">
              <a class="text-nowrap mobile-sub-nav-point" href="#"
                >Industries <i class="bi bi-chevron-down"></i> <br />
                <span>Industries We Serve</span></a
              >
              <ul class="mobile-sub-nav">
                <li>
                  <a href="./ITES_industry.html">ITES</a>
                </li>
                <li>
                  <a href="./Agriculture_industry.html">Agriculture</a>
                </li>
                <li>
                  <a href="./Healthcare_industry.html">Healthcare</a>
                </li>
              </ul>
            </li>
            <li class="mb-4">
              <a class="text-nowrap mobile-sub-nav-point" href="#"
                >Resources <i class="bi bi-chevron-down"></i> <br />
                <span>Thought Leadership</span></a
              >
              <ul class="mobile-sub-nav">
                <li>
                  <a href="./Our_Client.html">Our Clients</a>
                </li>
              </ul>
            </li>
            <li class="mb-4">
              <a class="text-nowrap" href="/Contact_Us.html"
                >Contact Us <br />
                <span>Information</span></a
              >
            </li> --}}
          </ul>
        </div>
        <div
          class="d-flex justify-content-end mb-4 mobile-nav-cancel-icon col-2"
          id="mobile-nav-cancel-icon"
        >
          <i class="bi bi-x-octagon fs-3"></i>
        </div>
      </div>
    </section>
    <!-- Mobile View Nav end -->
    <!-- service list start -->
    <section class="container service-list">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5">
          <div class="shadow-lg card-cls">
            <div class="card-top card-img1">
              <div class="card-top-overlay">
                <p>Personal Tax Advisory</p>
              </div>
            </div>
            <div class="card-bottom">
              <p>Comprehensive tax planning and compliance support.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5">
          <div class="shadow-lg card-cls">
            <div class="card-top card-img2">
              <div class="card-top-overlay">
                <p>Business Formation Consultancy</p>
              </div>
            </div>
            <div class="card-bottom">
              <p>
                Expert guidance on legal structuring, registration, and
                regulatory compliance for a smooth launch.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5">
          <div class="shadow-lg card-cls">
            <div class="card-top card-img3">
              <div class="card-top-overlay">
                <p>Legal Advisory</p>
              </div>
            </div>
            <div class="card-bottom">
              <p>
                Specialized support in legal matters and compliance with laws.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3 mb-5">
          <div class="shadow-lg card-cls">
            <div class="card-top card-img4">
              <div class="card-top-overlay">
                <p>Doctor Assistance</p>
              </div>
            </div>
            <div class="card-bottom">
              <p>Expert health consultations and guidance.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- service list end -->
    <!-- about us start -->
    <section class="container text-center my-5 about">
      <p>Expert Agency Services for Seamless Company Setup and Compliance</p>
      <p>
        Comprehensive Business Formation Solutions offers expert agency services
        to streamline your company setup. Our team ensures seamless
        incorporation, regulatory compliance, and operational efficiency. <br />
        <br />
        From initial registration to ongoing support, we provide personalized
        solutions to meet your unique business needs, helping you establish a
        solid foundation for success
      </p>
    </section>
    <!-- about us end -->
    <!-- Google Review start -->
    <section class="container my-5 pt-5">
      <div class="row">
        <div class="col-sm-4 mb-3 about-google">
          <img class="img-fluid" src="{{ asset('frontend/asset/image/google.png')}}" alt="image" />
        </div>
        <div class="col-sm-4 mb-3 about-review">
          <p>EXCELLENT</p>
          <img class="img-fluid" src="{{ asset('frontend/asset/image/review.png')}}" alt="image" />
          <p>Based on 1099 reviews</p>
        </div>
        <div class="col-sm-4 mb-3">
          <a href=""
            ><img class="img-fluid" src="{{ asset('frontend/asset/image/googlereview.png')}}" alt="image"
          /></a>
        </div>
      </div>
    </section>
    <!-- Google Review end -->
    <!-- Client List start -->
    <section class="container client mb-5 text-center">
      <p>Our <span>Honorable</span> Clients</p>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid mt-4" src="{{ asset('frontend/asset/image/client.png')}}" alt="image" />
        </div>
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid mt-4" src="{{ asset('frontend/asset/image/client2.png')}}" alt="image" />
        </div>
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid ms-5" style="width: 100px" src="{{ asset('frontend/asset/image/client3.jpg')}}"  alt="image" />
        </div>
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid" style="width: 100px" src="{{ asset('frontend/asset/image/client4.jpg')}}" alt="image"/>
        </div>
      </div>
    </section>
    <!-- Client List end -->
    <!-- Contact start  -->
    <section class="contact text-white">
      <div class="contact-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-4 contact-title text-center">
              <p class="pt-5">Connect with us</p>
            </div>
            <div class="col-sm-12 col-md-8 contact-site-div">
              <p>Our Address</p>
              <p>
                FNF Sheba, (Level-02), New Market, Lakshmipur City, <br />
                Uttor Temuni Bas Stand, Lakshmipur Sadar, Lakshmipur.

                <br />Email:  info@fnfsheba.com <br />Tel: +880 1714 377 588
                <br />What's Apps: +880 1714 377 588
              </p>
              <form class="mt-5 contact-form" action="{{ route('message.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="Your Name" /> <br />
                <input type="text" name="email" placeholder="Your Email" /> <br />
                <input type="text" name="contact" placeholder="Your Mobile Number" /> <br />
                <textarea name="message" rows="6" cols="50" placeholder="Your Massege here..."></textarea>
                <br />

                <button type="submit" class="contact-btn">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact  end -->    
@endsection