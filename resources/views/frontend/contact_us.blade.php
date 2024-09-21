@extends('frontend.layouts.app')
@section('title','Contact Us')
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
                <p class="page-hero-title text-nowrap">Contact Us</p>
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
    <!-- Contact start  -->
    <section class="contact text-white">
      <div class="contact-overlay">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-4 contact-title text-center">
              <p class="pt-5">Connect with us</p>
            </div>
            <div class="col-sm-12 col-md-8">
              <form class="mt-5 contact-form" action="{{ route('message.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="Your Name" /> <br />
                <input type="text" name="email" placeholder="Your Email" /> <br />
                <input type="text" name="contact" placeholder="Your Mobile Number" /> <br />
                <textarea name="message" rows="6" cols="50" placeholder="Your Massege here..."></textarea>
                <br />

                <button type="submit" class="contact-btn">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact  end -->   
@endsection