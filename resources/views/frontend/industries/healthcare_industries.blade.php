    @extends('frontend.layouts.app')
@section('title','Healthcare Industry')
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
                <p class="page-hero-title text-nowrap">Healthcare Industry</p>
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
      <h2 class="mt-5">Healthcare Industry</h2>
      <p class="mb-5">
        At <span class="fw-bold">FNFSheba,</span> we are committed to supporting
        the Healthcare Industry with a range of specialized services designed to
        meet its unique demands. Our comprehensive solutions are tailored to
        ensure that healthcare providers and organizations can focus on
        delivering quality care while we handle the complexities of compliance,
        administration, and operational efficiency.

        <br />
        <br />
        In the domain of Corporate Services, we offer BIN Registration
        Consultancy to assist healthcare organizations in obtaining their
        Business Identification Number (BIN), ensuring compliance with VAT
        regulations. Our eTIN Application Consultancy streamlines the process of
        acquiring an electronic Taxpayer Identification Number, facilitating
        smooth tax compliance. We also provide Trade Licence Consultancy,
        helping healthcare entities secure and renew the necessary licenses to
        operate legally.

        <br />
        <br />Our Trademark Registration Consultancy is essential for protecting
        the brand and intellectual property of healthcare providers, ensuring
        that your medical services and products are legally safeguarded.
        Business Formation Consultancy supports the establishment of new
        healthcare ventures, managing legal structures and registration
        processes to ensure a smooth setup. Additionally, our Bank Loan Advisory
        offers expert advice on securing financing for expansion and operational
        needs within the healthcare sector.

        <br />
        <br />
        For property-related needs, our Legal Document Services (Land and Flat)
        handle the preparation and management of documentation for healthcare
        facility transactions, ensuring compliance with legal requirements. Our
        Legal Advisory provides specialized guidance on regulatory issues,
        contracts, and other legal matters specific to the healthcare industry.
        <br />
        <br />
        For individual clients in the healthcare sector, we offer Personal Tax
        Advisory to optimize tax strategies, Doctor Assistance to ensure
        well-being and productivity, and Legal Advisory for navigating personal
        legal matters. Our Legal Document Services (Land and Flat) ensure that
        personal property transactions are managed accurately and efficiently.
        <br />
        <br />
        Our goal is to provide expert support that enhances operational
        efficiency and regulatory compliance, enabling healthcare providers and
        organizations to concentrate on delivering exceptional care and
        achieving their mission of improving health outcomes.
      </p>
    </section>
    <!-- about Details  end -->
    @endsection