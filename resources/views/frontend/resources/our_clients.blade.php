@extends('frontend.layouts.app')
@section('title','Our Client')
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
                <p class="page-hero-title text-nowrap">Our Honorable Client</p>
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
    <!-- our Client start  -->
    <section class="container page-about mb-5">
      <h2 class="mt-5">Our Honorable Client</h2>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid mt-4" src="{{ asset('frontend/asset/image/client.png')}}" alt="" />
        </div>
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid mt-4" src="{{ asset('frontend/asset/image/client2.png')}}" alt="" />
        </div>
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid ms-5" style="width: 100px" src="{{ asset('frontend/asset/image/client3.jpg')}}" alt="" />
        </div>
        <div class="col-sm-6 col-md-3">
          <img class="img-fluid" style="width: 100px" src="{{ asset('frontend/asset/image/client4.jpg')}}" alt="" />
        </div>
      </div>
    </section>
    <!-- our Client  end -->
@endsection