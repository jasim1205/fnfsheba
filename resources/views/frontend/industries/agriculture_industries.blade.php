@extends('frontend.layouts.app')
@section('title','Agriculture Industry')
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
                <p class="page-hero-title text-nowrap">Agriculture Industry</p>
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
      <h2 class="mt-5">Agriculture Industry</h2>
      <p class="mb-5">
        At <span class="fw-bold">FNFSheba,</span>, we are dedicated to
        supporting the Agriculture Industry with a comprehensive range of
        services designed to address its unique needs. Our specialized solutions
        are crafted to ensure that agricultural businesses can navigate
        regulatory requirements, optimize their operations, and focus on
        sustainable growth and productivity.

        <br />
        <br />
        In the realm of Corporate Services, we offer BIN Registration
        Consultancy to help agricultural businesses obtain their Business
        Identification Number (BIN) for VAT compliance. Our eTIN Application
        Consultancy simplifies the process of acquiring an electronic Taxpayer
        Identification Number, ensuring that all tax obligations are met with
        ease. We also provide crucial Trade Licence Consultancy, guiding
        businesses through the acquisition and renewal of trade licenses
        necessary for legal operations within the industry.

        <br />
        <br />Our Trademark Registration Consultancy safeguards your brand’s
        identity, ensuring your agricultural products and services are
        protected. Additionally, our Business Formation Consultancy supports the
        establishment of new agricultural ventures by managing the legal
        structure and registration processes, while our Bank Loan Advisory
        assists in securing the necessary financing to support growth and
        expansion.

        <br />
        <br />
        For specific needs related to property, our Legal Document Services
        (Land and Flat) handle all documentation for land transactions, ensuring
        compliance and accuracy. Our Legal Advisory provides expert guidance on
        regulatory issues, contracts, and other legal matters pertinent to the
        agriculture sector.
        <br />
        <br />
        For individuals in the agriculture sector, we offer Personal Tax
        Advisory to optimize tax strategies, Doctor Assistance for health and
        well-being, and Legal Advisory to navigate personal legal matters. Our
        Legal Document Services (Land and Flat) ensure that personal property
        transactions are handled smoothly and in compliance with legal
        standards.
        <br />
        <br />
        We are committed to providing tailored support that enhances operational
        efficiency and compliance, allowing businesses in the Agriculture
        Industry to focus on their core activities and achieve sustainable
        success.
      </p>
    </section>
    <!-- about Details  end -->
    @endsection