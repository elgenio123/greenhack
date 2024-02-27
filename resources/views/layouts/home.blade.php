@extends("app")

@section("content")


<div class="hero-slide owl-carousel site-blocks-cover">
    
        <div class="intro-section" style="background-image: url('{{ asset("assets/images/bg1.jpg") }}')">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 justify-content-center mx-auto text-center" data-aos="fade-up">
                <span class="d-block"></span>
                <h1>Cultivate the Future with Our Smart Agriculture Platform</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="intro-section" style="background-image: url('{{ asset("assets/images/bg2.jpg") }}');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 justify-content-center mx-auto text-center" data-aos="fade-up">
                <span class="d-block"></span>
                <h1>“Optimize Your Crop Yields with Our Intelligent Solution”</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="intro-section" style="background-image: url('{{ asset("assets/images/bg3.jpg") }}');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 justify-content-center mx-auto text-center" data-aos="fade-up">
                <span class="d-block"></span>
                <h1>“Data, Forecasts, Recommendations: The Key to Thriving Agriculture”</h1>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- END slider -->


      <div class="site-section services-1-wrap" id="services">
        <div class="container services">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-7">
              <h3 class="section-subtitle" >Ours Services</h3>
              <h2 class="section-title mb-4 text-black">We offer quality services such as:</h2>
            </div>
          </div>
          <div class="row no-gutters" @style("transform : translate(10%,10%);")>
            <div class="col-lg-3 col-md-6 services-brand">
              <div class="service-1">
                <span class="number">01</span>
                <div class="service-1-icon">
                  <img src="{{ asset("assets/images/icon-2.png") }}" alt="Image" class="img-fluid">
                </div>
                <div class="service-1-content">
                  <h3 class="service-heading">Smart Farming</h3>
                  <p>Analysis and interpretation of soil, climate, plant health and yield prediction data</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 services-brand">
              <div class="service-1">
                <span class="number">02</span>
                <div class="service-1-icon">
                  <img src="{{ asset("assets/images/icon-1.png") }}" alt="Image" class="img-fluid">
                </div>
                <div class="service-1-content">
                  <h3 class="service-heading">Quality Performance</h3>
                  <p>Personalized recommendations for crop optimization.</p>
                </div>
              </div>
            </div>
             <div class="col-lg-3 col-md-6 services-brand">
              <div class="service-1">
                <span class="number">03</span>
                <div class="service-1-icon">
                  <img src="{{ asset("assets/images/icon-3.png") }}" alt="Image" class="img-fluid">
                </div>
                <div class="service-1-content">
                  <h3 class="service-heading">Market</h3>
                  <p>Do you want to sell your products? We put you in touch with potential buyers </p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- END services -->

      <div class="site-section pb-0 " @style("overflow: hidden;")>
        <div class="block-2">
          <div class="container ">
            <div class="row">
              <div class="col-lg-6 " @style("margin-top: 40px; height: 3px")>
                <img src="{{ asset("assets/images/img_sq_5.jpg") }}" alt="Image " class="img-fluid img-overlap" >
              </div>
              <div class="col-lg-5 ml-auto">
                <h3 class="section-subtitle text-white opacity-50">Why Choose Us</h3>
                <h2 class="section-title mb-4">Our team is made up of more than <strong>100 agronomist experts</strong></h2>
                <p class="opacity-50">We understand the challenges that farmers face, which is why we’ve created a comprehensive solution to help you maximize your harvests and efficiently manage your farms.</p>
                
                <h2 class="section-title mb-4"><strong>Our challenges</strong></h2>
                
                <div class="row my-5">
                  <div class="col-lg-12 d-flex align-items-start mb-4">
                    <span class="icon-leaf mr-4 display-4"></span>
                    <div>
                      <h4 class="m-0 h5 text-white">Expertise in Smart Agriculture</h4>
                      {{-- <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p> --}}
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex align-items-start mb-4">
                    <span class="icon-lemon-o mr-4 display-4"></span>
                    <div>
                      <h4 class="m-0 h5 text-white">Accurate Data, Tangible Results</h4>
                      {{-- <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p> --}}
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex align-items-start">
                    <span class="icon-dashboard mr-4 display-4"></span>
                    <div>
                      <h4 class="m-0 h5 text-white">Personalized Recommendations</h4>
                      {{-- <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p> --}}
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex align-items-start mt-4">
                    <span class="icon-dashboard mr-4 display-4"></span>
                    <div>
                      <h4 class="m-0 h5 text-white">Continuous Training</h4>
                      {{-- <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p> --}}
                    </div>
                  </div>
                   <div class="col-lg-12 d-flex align-items-start mt-4">
                    <span class="icon-dashboard mr-4 display-4"></span>
                    <div>
                      <h4 class="m-0 h5 text-white">Connecting with Buyers</h4>
                      {{-- <p class="text-white opacity-50">Lorem ipsum dolor sit amet.</p> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END block-2 -->


      <div class="site-section">
        <div class="container">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
              <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-1">
                <span class="play"><span class=" icon-play"></span></span>
                <img src="{{ asset("assets/images/img_sq_6.jpg") }}" alt="Image" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-5 order-lg-1">
              <h2 class="text-primary mb-4">Plants Make Life Better</h2>
              <p class="mb-4">“Unlock Your Green Potential: Whether you’re a seasoned farmer or a curious beginner, agriculture offers a world of opportunity. From nurturing crops to sustainable practices, embark on a journey that not only feeds the world but also nourishes your passion for growth. </p>
              <ul class="list-unstyled">
                <li>It all starts here and only here!</li>
              </ul>
              <p><a href="contact.html" class="btn btn-primary">Get in touch</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section block-3">
        <div class="container">

          <div class="mb-vb5">
            <h3 class="section-subtitle text-white opacity-50">What we do</h3>
            <h2 class="section-title mb-4">Explore Our <strong>Farm</strong></h2>
          </div>
{{-- 
          <div class="projects-carousel-wrap">
            <div class="owl-carousel owl-slide-3">
              <div class="project-item">
                <div class="project-item-contents">
                  <a href="#">
                    <span class="project-item-category">We do</span>
                    <h2 class="project-item-title">
                      Planting
                    </h2>
                  </a>
                </div>
                <img src="{{ asset("assets/images/img_sq_1.jpg") }}" alt="Image" class="img-fluid">
              </div>
              <div class="project-item">
                <div class="project-item-contents">
                  <a href="#">
                    <span class="project-item-category">We do</span>
                    <h2 class="project-item-title">
                      Mulching
                    </h2>
                  </a>
                </div>
                <img src="{{ asset("assets/images/img_sq_3.jpg") }}" alt="Image" class="img-fluid">
              </div>
              <div class="project-item">
                <div class="project-item-contents">
                  <a href="#">
                    <span class="project-item-category">We do</span>
                    <h2 class="project-item-title">
                      Watering
                    </h2>
                  </a>
                </div>
                <img src="{{ asset("assets/images/img_sq_8.jpg") }}" alt="Image" class="img-fluid">
              </div>
              <div class="project-item">
                <div class="project-item-contents">
                  <a href="#">
                    <span class="project-item-category">We do</span>
                    <h2 class="project-item-title">
                      Fertilizing
                    </h2>
                  </a>
                </div>
                <img src="{{ asset("assets/images/img_sq_4.jpg") }}" alt="Image" class="img-fluid">
              </div>

              <div class="project-item">
                <div class="project-item-contents">
                  <a href="#">
                    <span class="project-item-category">We do</span>
                    <h2 class="project-item-title">
                      Harvesting
                    </h2>
                  </a>
                </div>
                <img src="{{ asset("assets/images/img_sq_5.jpg") }}" alt="Image" class="img-fluid">
              </div>
              <div class="project-item">
                <div class="project-item-contents">
                  <a href="#">
                    <span class="project-item-category">We do</span>
                    <h2 class="project-item-title">
                      Mowing
                    </h2>
                  </a>
                </div>
                <img src="{{ asset("assets/images/img_sq_6.jpg") }}" alt="Image" class="img-fluid">
              </div>
              <div class="project-item">
                <div class="project-item-contents">
                  <a href="#">
                    <span class="project-item-category">We do</span>
                    <h2 class="project-item-title">
                      Seeding Plants
                    </h2>
                  </a>
                </div>
                <img src="{{ asset("assets/images/img_sq_8.jpg") }}" alt="Image" class="img-fluid">
              </div>


            </div> --}}
          </div>

        </div>
      </div>

      {{-- pricing --}}

    <div class="container">

      <h2 class="section-title mb-4 text-black">Check out our subscription plans</h2>

      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-50">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0 XAF<small class="text-body-secondary fw-light">/years</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Free dashboard</li>
              <li>Max projets 2  </li>
              <li>Email support</li>
              <li>Help center access</li>
              <li>Market place</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">10.000 XAF<small class="text-body-secondary fw-light">/years</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Free dashboard</li>
              <li>Unlimited projets   </li>
              <li>Email support</li>
              <li>Help center access</li>
              <li>Market place</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">50.000<small class="text-body-secondary fw-light">/years</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Professional dashboard</li>
              <li>Unlimited projets </li>
              <li>Email support</li>
              <li>Help center access</li>
              <li>Market place</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>


    </div>

      {{-- end pricing --}}


      <div class="py-5 bg-primary block-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <h3 class="text-white">Stay Informed with Our Newsletter</h3>
              <p class="opacity-50">Are you passionate about smart agriculture, data-driven insights, and sustainable farming practices? Don’t miss out on the latest updates, expert tips, and exclusive content. Join our community by subscribing to our newsletter today!</p>
            </div>
            <div class="col-lg-6">
              <form action="#" class="form-subscribe d-flex align-items-stretch">
                <input type="email" class="form-control h-100" placeholder="Enter your e-mail">
                <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
              </form>
            </div>
          </div>
        </div>
      </div>


      

@endsection