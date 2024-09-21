@extends('frontend.layouts.app')
@section('title','Who we are ?')
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
                <p class="page-hero-title text-nowrap">Who we are ?</p>
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
    <!-- about Details start  -->
    <section class="container page-about">
      <h2 class="mt-5">About</h2>
      <p class="mb-5">
        We provide comprehensive consultancy services to support businesses and
        individuals in navigating essential processes. Our expertise spans
        Business Formation, BIN and TIN registration, Trade License support,
        Doctor assistance, Personal Tax Advisory, Legal Document preparation,
        and Legal Law compliance. <br /><br />
        With a commitment to simplifying complexities, we ensure efficient,
        compliant, and successful outcomes for our clients.
      </p>

      <h2>Mission</h2>
      <p class="mb-5">
        Our mission is to empower businesses and individuals by providing expert
        consultancy and support services in legal, financial, and regulatory
        matters. We strive to simplify complex processes, ensuring our clients
        achieve compliance, growth, and long-term success.
      </p>

      <h2>Vision</h2>
      <p class="mb-5">
        Our vision is to become a trusted leader in consultancy services,
        recognized for delivering innovative and reliable solutions that help
        businesses and individuals thrive in an ever-evolving regulatory
        landscape. We aim to foster a future where legal and financial processes
        are accessible, efficient, and transparent for all.
      </p>
    </section>
    <!-- about Details  end -->
@endsection