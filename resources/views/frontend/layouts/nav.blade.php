<nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                  <li class="nav-item ms-4">
                    <a class="nav-link text-nowrap" href="#"
                      >About Us <i class="bi bi-chevron-down"></i> <br />
                      <span>Business Info</span></a
                    >
                    <ul class="sub-menu-view">
                      <li>
                        <a href="{{ route('who_we') }}">Who we are ?</a>
                      </li>
                      <li>
                        <a href="{{ route('our_teams') }}">Our Team</a>
                      </li>
                      <li>
                        <a href="{{ route('business_goal') }}">Business Goals</a>
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
                        <a href="{{ route('corporate_services') }}"
                          ><i class="bi bi-building-fill-check"></i>Corporate
                          Service</a
                        >
                      </li>
                      <li>
                        <a href="{{ route('individual_services') }}"
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
                        <a href="{{ route('ites_industries') }}">ITES</a>
                      </li>
                      <li>
                        <a href="{{ route('agriculture_industries') }}">Agriculture</a>
                      </li>
                      <li>
                        <a href="{{ route('healthcare_industries') }}">Healthcare</a>
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
                        <a href="{{ route('our_clients') }}">Our Clients</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item active-board">
                    <a class="nav-link ms-4 text-nowrap" href="{{ route('contact_us') }}"
                      >Contact Us <br />
                      <span>Information</span></a
                    >
                  </li>
                </ul>
              </nav>