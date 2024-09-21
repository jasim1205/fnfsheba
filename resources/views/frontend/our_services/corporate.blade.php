@extends('frontend.layouts.app')
@section('title','Corporate Services')
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
                <p class="page-hero-title text-nowrap">
                  Our Corporate Services
                </p>
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
    <!-- Our Servics start  -->
    <section class="container page-our-service mb-5">
      @if($header->title)
          <h3>{{ $header->title }}</h3>
      @else
          <h3>Our Corporate Services</h3>
      @endif

      @if($header->description)
          <p>{{ $header->description }}</p>
      @else
          <p class="our-service-details">
            We offer a comprehensive range of corporate services designed to support
            businesses at every stage of their journey. From business formation and
            registration to obtaining essential certifications such as BIN and TIN,
            we ensure full compliance with regulatory requirements. Our services
            also include trade license support, legal document preparation, and
            ongoing consultancy to help businesses navigate complex legal and
            financial landscapes. With a focus on efficiency and accuracy, we are
            dedicated to helping companies operate smoothly and achieve sustainable
            growth.
          </p>
      @endif
      <div class="row">
        @forelse ($middle as $item) 
        
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              @if($item->icon)
                  <i class="{{ $item->icon }}"></i>
              @else
                  <i class="bi bi-diagram-3-fill"></i>
              @endif
              <div>
                @if($item->title)
                     <h5>{{ $item->title }}</h5>
                @else
                    <h5>BIN Registration Consultancy</h5>
                @endif

                @if ($item->description)
                    <p>{{ $item->description }}</p>
                @else
                    <p>
                      Our BIN Registration Consultancy provides businesses with expert
                      guidance in securing their Business Identification Number (BIN),
                      a vital requirement for VAT registration and compliance. We
                      simplify the process, ensuring your business meets all necessary
                      regulations efficiently and accurately, allowing you to focus on
                      growth while we handle the complexities of registration.
                      Our BIN Registration Consultancy provides businesses with expert
                      guidance in securing their Business Identification Number (BIN),
                      a vital requirement for VAT registration and compliance. We
                      simplify the process, ensuring your business meets all necessary
                      regulations efficiently and accurately, allowing you to focus on
                      growth while we handle the complexities of registration.
                      Our BIN Registration Consultancy provides businesses with expert
                      guidance in securing their Business Identification Number (BIN),
                      a vital requirement for VAT registration and compliance. We
                      simplify the process, ensuring your business meets all necessary
                      regulations efficiently and accurately, allowing you to focus on
                      growth while we handle the complexities of registration.
                      Our BIN Registration Consultancy provides businesses with expert
                      guidance in securing their Business Identification Number (BIN),
                      a vital requirement for VAT registration and compliance. We
                      simplify the process, ensuring your business meets all necessary
                      regulations efficiently and accurately, allowing you to focus on
                      growth while we handle the complexities of registration.
                    </p>
                @endif
                {{-- <a href=""> Read More...</a> --}}
              </div>
            </div>
          </div>
          {{-- <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>eTIN Application Consultancy</h5>
                <p>
                  Our eTIN Application Consultancy offers expert assistance in
                  obtaining your electronic Taxpayer Identification Number (eTIN).
                  We streamline the application process, ensuring accurate and
                  timely registration for both individuals and businesses. With
                  our guidance, you can easily meet tax obligations and maintain
                  compliance with government regulations.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>Trade Licence Consultancy</h5>
                <p>
                  Our Trade License Consultancy provides comprehensive support in
                  acquiring and renewing trade licenses, ensuring your business
                  complies with local regulations. We handle the entire process,
                  from documentation to submission, allowing you to operate your
                  business legally and without interruptions. Let us simplify the
                  complexities of trade licensing so you can focus on running your
                  business.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>Trademark Registration Consultancy</h5>
                <p>
                  Our Trademark Registration Consultancy helps protect your brand
                  by guiding you through the trademark application process. From
                  filing to securing your intellectual property rights, we ensure
                  that your brand identity is legally safeguarded. With our
                  expertise, you can confidently register and protect your
                  trademarks, preventing unauthorized use and ensuring long-term
                  brand value.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>Business Formation Consultancy</h5>
                <p>
                  Our Business Formation Consultancy provides expert support in
                  setting up your business, from selecting the right legal
                  structure to handling all registration requirements. We simplify
                  the process, ensuring compliance with local laws and
                  regulations, so you can launch your business smoothly and
                  confidently. Let us guide you through every step of the
                  formation process for a successful start.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>Bank Loan Advisory</h5>
                <p>
                  Our Bank Loan Advisory service offers expert guidance in
                  securing the right financing for your business. We assist with
                  preparing loan applications, selecting suitable financial
                  institutions, and navigating the approval process. With our
                  advisory, you can secure loans that align with your business
                  needs and goals, ensuring financial stability and growth
                  opportunities.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>Legal Advisory</h5>
                <p>
                  Our Legal Advisory service provides businesses and individuals
                  with expert guidance on a wide range of legal matters. From
                  contract drafting and compliance to dispute resolution and
                  regulatory advice, we ensure that you stay informed and
                  protected. Our team is dedicated to helping you navigate complex
                  legal frameworks with clarity and confidence, ensuring your
                  rights and interests are safeguarded.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>Legal Document Services (Land and Flat)</h5>
                <p>
                  Our Legal Document Services provide expert assistance in
                  preparing, reviewing, and verifying all necessary legal
                  documents related to land and flat transactions. Whether you're
                  buying, selling, or leasing, we ensure that all agreements,
                  deeds, and contracts are legally sound and compliant with local
                  regulations. With our support, you can confidently navigate real
                  estate transactions, safeguarding your interests every step of
                  the way.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-4">
            <div class="d-flex service-details">
              <i class="bi bi-diagram-3-fill"></i>
              <div>
                <h5>Business Automation Solutions with Software and IoT</h5>
                <p>
                  We specialize in delivering cutting-edge business automation
                  solutions through advanced software applications and Internet of
                  Things (IoT) technologies. Our services streamline operations,
                  enhance efficiency, and provide real-time insights by
                  integrating smart technology into your business processes. From
                  automated workflows to intelligent data management, we help you
                  transform your operations, reduce manual tasks, and drive
                  innovation for sustainable growth.
                </p>
                <a href=""> Read More...</a>
              </div>
            </div>
          </div> --}}
        @empty
            <div class="col-sm-12">
              <h5>No Data Found</h5>
            </div>
        @endforelse
      </div>
    </section>
    <!-- Our Team  end -->
@endsection