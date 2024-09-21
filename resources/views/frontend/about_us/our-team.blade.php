@extends('frontend.layouts.app')
@section('title','Our Team')
@section('content')
    <!-- Header start -->
    <section class="page-header-hero">
      <div class="overlay">
        <div class="container pt-4">
          <!-- logo and nav -->
          <div class="row">
            <!-- logo -->
            <div class="col-3">
              <a href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('frontend/asset/image/logo.png')}}" alt="" />
              </a>
            </div>
            <!-- nav -->
            <div class="col-9 d-flex justify-content-end">
                @include('frontend.layouts.nav')
              <!-- mobile Nav -->
              <div class="mobile-nav-icon">
                <i class="bi bi-list" id="mobile-nav-icon"></i>
              </div>
            </div>
          </div>
          <!-- hero -->
          <div class="text-white">
            <div class="row page-hero">
              <div class="col d-flex align-items-end">
                <p class="page-hero-title text-nowrap">Our Team</p>
              </div>
              <div class="col d-flex align-items-end flex-column">
                <div class="contact-site-div mt-auto p-2 text-end">
                  <p></p>
                  <p class="mb-0">
                    FNF Sheba, (Level-02), New Market, Lakshmipur City, <br />
                    Uttor Temuni Bas Stand, Lakshmipur Sadar, Lakshmipur.

                    <br />Email:  info@fnfsheba.com <br />Tel: +880 1714 377 588
                    <br />What's Apps: +880 1714 377 588
                  </p>
                </div>
                <div class="footer-page pe-2">
                  <i class="bi bi-facebook cursor"></i>
                  <i class="bi bi-youtube cursor"></i>
                </div>
              </div>
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
    <!-- Our Team start  -->
    <section class="container page-our-team mb-5">
      <div class="row">
        <div class="col-sm-12 col-md-6 mb-5 team-img">
          <img class="img-fluid" src="{{ asset('frontend/asset/image/ourTeam.png')}}" alt="" />
          <div class="team-title shadow">
            <p>Enam Hossain Masud Alam</p>
            <p>Proprietor</p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-5 pt-5 team-massege">
          <p>
            At the heart of our mission is a commitment to excellence and
            integrity in every service we provide. As the proprietor, I believe
            in creating lasting relationships with our clients by delivering
            solutions that are not only efficient but also tailored to their
            unique needs. <br /><br />
            We understand the challenges businesses and individuals face in
            navigating legal and regulatory frameworks, and our goal is to make
            those processes as seamless as possible. Together, we can achieve
            growth and success with confidence and compliance.
          </p>
        </div>
      </div>
    </section>
    <!-- Our Team  end -->
@endsection