@extends('frontend.layouts.app')
@section('title','Individual Services')
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
                  Our Individual Services
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
              <h3>Our Individual Services</h3>
          @endif

          @if($header->description)
              <p>{{ $header->description }}</p>
          @else
          <p class="our-service-details">
            We offer personalized services tailored to meet the unique needs of
            individuals. Our offerings include expert consultancy for personal tax
            planning, legal document preparation, and obtaining essential
            certifications like BIN and TIN. We also provide specialized support for
            trademark registration and trade licensing. With a focus on individual
            needs, we ensure that each service is delivered with precision and care,
            helping you navigate personal and professional requirements with
            confidence.
          </p>
          @endif

      <div class="row">
        @forelse ($middle as $item)
            <div class="col-sm-6 mb-4">
              <div class="d-flex service-details">
                @if ($item->icon)
                    <i class="{{ $item->icon }}"></i>
                @else
                    <i class="bi bi-diagram-3-fill"></i>
                @endif
                <div>
                  @if ($item->title)
                      <h5>{{ $item->title }}</h5>
                  @else
                      <h5>Personal Tax Advisory</h5>
                  @endif

                  @if ($item->description)
                      {{ $item->description }}
                  @else
                    <p>
                      Our Personal Tax Advisory service provides tailored guidance to
                      help you navigate complex tax regulations and optimize your tax
                      strategy. We offer expert advice on tax planning, filing, and
                      compliance, ensuring that you maximize deductions and credits
                      while meeting all regulatory requirements. With our support, you
                      can manage your personal taxes efficiently and with confidence,
                      avoiding pitfalls and achieving financial peace of mind.
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
                  <h5>Doctor Assistance</h5>
                  <p>
                    Our Doctor Assistance service offers personalized healthcare
                    support, connecting you with medical professionals who can
                    provide expert advice, consultations, and guidance on managing
                    your health. Whether you need routine check-ups, specialist
                    referrals, or health management plans, we ensure that you
                    receive the care and attention necessary to maintain your
                    well-being.
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
                    Our Legal Document Services for individuals offer expert
                    assistance in preparing and managing all necessary documentation
                    related to land and flat transactions. From drafting purchase
                    agreements and lease contracts to verifying deeds and handling
                    regulatory compliance, we ensure that your property transactions
                    are legally sound and hassle-free. Trust us to safeguard your
                    interests with precise and professional documentation services.
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
                    Our Legal Advisory service for individuals provides personalized
                    legal guidance on a wide range of matters. Whether you need help
                    with estate planning, contract review, or navigating legal
                    disputes, our experts offer clear, actionable advice tailored to
                    your specific needs. We ensure that you understand your rights
                    and obligations, providing support to make informed decisions
                    and resolve legal issues effectively.
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
                    Our Bank Loan Advisory service assists individuals in navigating
                    the loan application process with ease. We provide expert advice
                    on selecting the right loan options, preparing your application,
                    and understanding terms and conditions. Our goal is to help you
                    secure financing that aligns with your personal financial goals,
                    ensuring a smooth and successful borrowing experience.
                  </p>
                  <a href=""> Read More...</a>
                </div>
              </div>
            </div> --}}
        @empty
            
        @endforelse
      </div>
    </section>
    <!-- Our Team  end -->
@endsection