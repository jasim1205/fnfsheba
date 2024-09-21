@extends('frontend.layouts.app')
@section('title','ITES Industry')
@section('content')
        <!-- Header start -->
    <section class="page-header-hero">
      <div class="overlay">
        <div class="container pt-4">
          <!-- logo and nav -->
          <div class="row">
            <!-- logo -->
            <div class="col-3">
              <a href="/">
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
                <p class="page-hero-title text-nowrap">ITES Industry</p>
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
      <h2 class="mt-5">ITES Industry</h2>
      <p class="mb-5">
        At <span class="fw-bold">FNFSheba,</span> we specialize in delivering a
        comprehensive suite of services tailored to the ITES (Information
        Technology Enabled Services) industry, providing essential support that
        allows businesses to thrive in a rapidly evolving sector. Our Corporate
        Services are meticulously designed to address the unique needs of ITES
        companies, ensuring seamless operations and compliance with regulatory
        requirements.
        <br />
        <br />
        We start by offering expert guidance in BIN Registration Consultancy,
        helping businesses secure their Business Identification Number (BIN) to
        comply with VAT regulations. Our eTIN Application Consultancy simplifies
        the process of obtaining an electronic Taxpayer Identification Number,
        ensuring that your tax obligations are met efficiently. For businesses
        needing to navigate local regulations, our Trade Licence Consultancy
        offers end-to-end support in acquiring and renewing trade licenses,
        while our Trademark Registration Consultancy ensures your intellectual
        property is protected and secure.
        <br />
        <br />
        In addition, our Business Formation Consultancy assists in setting up
        your business with the right legal structure and registration processes.
        Our Bank Loan Advisory services provide expert advice on securing the
        right financing to support business growth. We also offer Legal Advisory
        tailored specifically for the ITES sector, addressing regulatory
        compliance, contracts, and other critical legal matters. For property
        transactions, our Legal Document Services (Land and Flat) ensure that
        all documentation is managed accurately and in compliance with legal
        requirements.
        <br />
        <br />For individual clients, we provide Personal Tax Advisory to
        optimize tax strategies, Doctor Assistance to ensure well-being and
        productivity, and Legal Document Services (Land and Flat) for personal
        property transactions. Our Legal Advisory and Bank Loan Advisory
        services for individuals offer personalized guidance to address various
        legal and financial needs.
        <br />
        <br />
        Our goal is to deliver exceptional service and support, allowing ITES
        businesses and professionals to focus on innovation and success while we
        manage the complexities of compliance and administration.
      </p>
    </section>
    <!-- about Details  end -->
@endsection