<!-- @format -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="css/splide.min.css">
        <link rel="stylesheet" href="css/splide.manager.css">
        <!-- <link rel="stylesheet" href="css/custom.css"> -->
        <script src="js/splide.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
      <title>
        GC
      </title>
    <!--     SLIDER      START  -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <!--     SLIDER      END  ---->
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/custom.css" />
  </head>
  <body class="bg-black container-fluid">
    <!-- Header -->
    <header
      class="row bg-black text-white py-3 px-lg-5 px-1 fixed-top"
      id="header">
      <div class="container d-flex justify-content-between align-items-center">
        <a href="#"
          ><img
            src="img/logo.png"
            alt="Logo"
            class="img-fluid"
            style="height: 50px"
        /></a>
        <nav class="d-none d-lg-flex">
          <ul class="nav text-uppercase nav-pills">
            <li class="nav-item mx-1">
              <a
                href="#hero"
                class="nav-link text-white active"
                data-scroll-nav="0"
                >About Us</a
              >
            </li>
            <li class="nav-item mx-1">
              <a
                href="#services"
                class="nav-link text-white"
                data-scroll-nav="1"
                >Services</a
              >
            </li>
            <li class="nav-item mx-1">
              <a href="#projects" class="nav-link text-white" data-scroll-nav="2"
                >Projects</a
              >
            </li>
            <li class="nav-item mx-1">
              <a href="#awards" class="nav-link text-white">Awards</a>
            </li>
            <li class="nav-item mx-1">
              <a href="#team" class="nav-link text-white">Our Team</a>
            </li>
            <li class="nav-item mx-1">
              <a href="#contact" class="nav-link text-white">Contact Us</a>
            </li>
          </ul>
        </nav>
        <div class="d-none d-lg-flex">
          <a href="#" class="text-black me-2 bg-primary px-1 rounded"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="#" class="text-black me-2 bg-primary px-1 rounded"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="#" class="text-black me-1 bg-primary px-1 rounded"
            ><i class="fab fa-snapchat"></i
          ></a>
        </div>
        <button
          class="btn d-lg-none text-white"
          data-bs-toggle="offcanvas"
          data-bs-target="#mobileNav">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </header>

    <!-- Mobile Offcanvas -->
    <div class="offcanvas offcanvas-end" id="mobileNav">
      <div class="offcanvas-header bg-white">
        <a href="#"
          ><img
            src="img/logo.png"
            alt="Logo"
            class="img-fluid"
            style="height: 50px"
        /></a>
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body bg-black mt-1">
        <ul
          class="nav nav-pills flex-column text-uppercase justify-content-center text-center my-5">
          <li class="nav-item my-2">
            <a href="#nav-pillshero" class="nav-link">About Us</a>
          </li>
          <li class="nav-item my-2">
            <a href="#services" class="nav-link">Services</a>
          </li>
          <li class="nav-item my-2">
            <a href="#projects" class="nav-link">Projects</a>
          </li>
          <li class="nav-item my-2"><a href="#" class="nav-link">Awards</a></li>
          <li class="nav-item my-2">
            <a href="#team" class="nav-link">Our Team</a>
          </li>
          <li class="nav-item my-2">
            <a href="#contact" class="nav-link">Contact Us</a>
          </li>
        </ul>
        <div class="mt-3">
          <a href="#" class="text-black me-2 bg-primary px-1 rounded"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="#" class="text-black me-2 bg-primary px-1 rounded"
            ><i class="fab fa-twitter"></i
          ></a>
          <a href="#" class="text-black me-2 bg-primary px-1 rounded"
            ><i class="fab fa-snapchat"></i
          ></a>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <main class="main mt-5 row" >    <!-- id="main" -->





      
      <!-- Hero section Start -->
      <!-- <section>
        <div class="container">
          <div class="row">
            <div class="h-10" style="height: 10vh"></div>
          </div>
        </div>
      </section> -->
      <section class="container pb-5" id="hero" data-scroll-index="0">
        <div
          class="bg-hero container text-white position-relative rounded p-5 h-100">
          <div
            class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-75"></div>
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase color-primary">
                  Home Page<br />Title Here.
                </h1>
                <p class="mt-4 scrollable-text">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                  nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum iriure
                  dolor in hendrerit in vulputate velit esse molestie consequat,
                  vel illum dolore eu feugiat vero eros et accumsan et iusto
                  odio dignissim qui blandit praesent luptatum zzril delenit
                  augue.
                  <br />
                  <br />dolor in hendrerit in vulputate velit esse molestie
                  consequat, vel illum dolore eu feugiat nulla facilisis at vero
                  eros et accumsan et iusto odio dignissim qui blandit praesent
                  luptatum zzril delenit augue . Doloribus natus consequatur
                  dolores in consequuntur. Voluptates excepturi, nulla
                  consectetur, vero dolores commodi eos fugit, incidunt mollitia
                  sunt repellat? Nam, eum sed? Porro sunt excepturi dignissimos,
                  nihil sapiente, expedita aliquam, praesentium omnis adipisci
                  mollitia rem veniam at commodi doloremque perferendis sequi
                  optio ipsum! Quibusdam sit maiores omnis voluptates maxime.
                  Sit natus assumenda quam nemo aperiam ea!
                </p>
              </div>
              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">01</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  About Us
                </p>
              </div>
            </div>
          </div>

          <div class="row z-111 position-relative mt-5 pt-2 col-12">
            <div
              class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center">
              <p class="text-white bot">AR/</p>
              <p class="text-white bot color-primary">EN</p>
            </div>
            <div
              class="col-md-3 col-sm-6 col-6 d-flex justify-content-center text-center">
              <img src="img/image5.png" alt="" class="arrow" />
              <p class="text-white px-2 bot">SERVICES</p>
            </div>
            <div class="col-md-7 d-sm-none"></div>
          </div>
        </div>
      </section>
      <!-- Hero section End -->
  
      <!-- Services section Start -->
      <section class="container pb-5 pt-3" id="services" data-scroll-index="1">
        <div
          class="bg-services container text-white position-relative rounded p-5 h-100">
          <div
            class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-50"></div>
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase color-primary">
                  EXCEPTIONAL
                  <br />SERVICES.
                </h1>
                <div id="accordion" class="scrollable-text">
                  <div class="">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button
                          class="btn btn-link text-uppercase"
                          data-toggle="collapse"
                          data-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne">
                          01 Collapsible Group Item
                        </button>
                      </h5>
                    </div>

                    <div
                      id="collapseOne"
                      class="collapse show"
                      aria-labelledby="headingOne"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Repellendus, mollitia! Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Magni adipisci, iure odio
                        possimus eligendi facere vero omnis ad et eius ducimus
                        reiciendis nulla. Quae nulla eum officiis adipisci, cum
                        laudantium!
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed"
                          data-toggle="collapse"
                          data-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo">
                          02 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapseTwo"
                      class="collapse"
                      aria-labelledby="headingTwo"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Totam, earum? Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Ullam, sunt?
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed"
                          data-toggle="collapse"
                          data-target="#collapseThree"
                          aria-expanded="false"
                          aria-controls="collapseThree">
                          03 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapseThree"
                      class="collapse"
                      aria-labelledby="headingThree"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eaque, sequi!
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="card-header" id="heading4">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed"
                          data-toggle="collapse"
                          data-target="#collapse4"
                          aria-expanded="false"
                          aria-controls="collapse4">
                          04 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapse4"
                      class="collapse"
                      aria-labelledby="heading4"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eaque, sequi! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Incidunt nostrum eum iusto ab
                        cupiditate distinctio facilis ipsam aliquam sed labore?
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="card-header" id="heading5">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed text-uppercase"
                          data-toggle="collapse"
                          data-target="#collapse5"
                          aria-expanded="false"
                          aria-controls="collapse5">
                          05 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapse5"
                      class="collapse"
                      aria-labelledby="heading5"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eaque, sequi! Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Excepturi qui nemo vel doloribus
                        deserunt, veritatis neque facilis minus officiis
                        laborum?
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="card-header" id="heading6">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed"
                          data-toggle="collapse"
                          data-target="#collapse6"
                          aria-expanded="false"
                          aria-controls="collapse6">
                          06 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapse6"
                      class="collapse"
                      aria-labelledby="heading6"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Totam, earum? Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Ullam, sunt?
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="card-header" id="heading7">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed"
                          data-toggle="collapse"
                          data-target="#collapse7"
                          aria-expanded="false"
                          aria-controls="collapse7">
                          07 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapse7"
                      class="collapse"
                      aria-labelledby="heading7"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Totam, earum? Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Ullam, sunt?
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="card-header" id="heading8">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed"
                          data-toggle="collapse"
                          data-target="#collapse8"
                          aria-expanded="false"
                          aria-controls="collapse8">
                          08 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapse8"
                      class="collapse"
                      aria-labelledby="heading8"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Totam, earum? Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Ullam, sunt?
                      </div>
                    </div>
                  </div>

                  <div class="">
                    <div class="card-header" id="heading9">
                      <h5 class="mb-0">
                        <button
                          class="text-uppercase btn btn-link collapsed"
                          data-toggle="collapse"
                          data-target="#collapse9"
                          aria-expanded="false"
                          aria-controls="collapse9">
                          09 Collapsible Group Item
                        </button>
                      </h5>
                    </div>
                    <div
                      id="collapse9"
                      class="collapse"
                      aria-labelledby="heading9"
                      data-parent="#accordion">
                      <div class="card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Totam, earum? Lorem ipsum, dolor sit amet
                        consectetur adipisicing elit. Ullam, sunt?
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">02</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  Services
                </p>
              </div>
            </div>
          </div>

          <div class="row z-111 position-relative mt-5 pt-2 col-12">
            <div
              class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center">
              <p class="text-white bot">AR/</p>
              <p class="text-white bot color-primary">EN</p>
            </div>
            <div
              class="col-md-3 col-sm-6 col-6 d-flex justify-content-center text-center">
              <img src="img/image5.png" alt="" class="arrow" />
              <p class="text-white px-2 bot text-uppercase">Projects</p>
            </div>
            <div class="col-md-7 d-sm-none"></div>
          </div>
        </div>
      </section>
      <!-- Services section End -->

      <!-- Srart  ====
        ======================================= -->

                <!-- // ---------------------  Services Splide  Start----------------------// -->

     


        
      <!-- Srart projects ====
        ======================================= -->
      <section class="container pb-5 pt-3" id="projects">
        <div
          class="bg-tawer container text-white position-relative rounded p-5 h-100">
          <div
            class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-50"></div>
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-10 mb-4">
                <h1 class="display-4 text-uppercase color-primary">
                   SUCCESS
                  <br />STORIES
                </h1>
               
 
           
               
                    <div class="splide  " id="servicessplide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                
                                <li class="splide__slide">
                                     
                                  <div class="d-block project">
                                      <h3 class="text-decoration-underline">
                                      01 PROJECT NAME, City - Country
                                    </h3>
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit
                                      amet nulla auctor, vestibulum magna sed, convallis ex. Integer posuere er
                                      at nulla tempus dignissim. Cum sociis natoque penatibus et magn
                                      </p>
                                      <div class="row ">
                                        <div class="splide  "  id="projects_splide2">
                        <div class="splide__track project">
                            <ul class="splide__list">
                                
                                <li class="splide__slide">
                                    <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" alt="">


                                </li>
                                
                                <li class="splide__slide">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR__zJOFi3ef7eGRIlVWo2DKdUXKrCq8dBwtQ&s" alt="">
                              </li>
                              <li class="splide__slide">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR__zJOFi3ef7eGRIlVWo2DKdUXKrCq8dBwtQ&s" alt="">
                              </li>
                              <li class="splide__slide">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR__zJOFi3ef7eGRIlVWo2DKdUXKrCq8dBwtQ&s" alt="">
                              </li>
                              <li class="splide__slide">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR__zJOFi3ef7eGRIlVWo2DKdUXKrCq8dBwtQ&s" alt="">
                              </li>
                                <li class="splide__slide">
                                    <img src="https://fps.cdnpk.net/images/home/subhome-ai.webp?w=649&h=649" alt="">
                                </li>
                                <li class="splide__slide">
                                   <img src="https://media.istockphoto.com/id/1415563302/photo/creative-layout-installed-with-tropical-colorful-plants-forest-glow-in-the-dark-background.jpg?s=612x612&w=0&k=20&c=-OZqDlkI7kHz7_8K4aa5UX4s4OIooBsE4ZC8gVic9dU=" alt="">
                                </li>
                                <!-- <li class="splide__slide">
                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/048/021/360/small/colorful-lizard-in-neon-colors-dark-background-with-a-close-up-photo.jpg" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="https://img.freepik.com/premium-photo/colorful-acid-cat-sunglasses-illustration_547296-1323.jpg?semt=ais_hybrid" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="https://img.freepik.com/photos-premium/illustration-coloree-mi-journee-tete-animal-chat-neon-mignon-ai_848903-167.jpg?semt=ais_hybrid" alt="">
                                </li> -->
                            </ul>
                        </div>
                        
                                  </div>
                                </li>
                                <li class="splide__slide">
                                    <h1>
                                        Slide 02
                                    </h1>
                                </li>
                                
                            </ul>
                        </div>
  
                      </div>  
                </div>
           
         
               

              </div>

              <!-- <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">09</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  JOIN US
                </p>
              </div>
            </div> -->
          </div>

          <div class="row z-111 position-relative mt-5 pt-2 col-12">
            <div
              class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center">
              <p class="text-white bot">AR/</p>
              <p class="text-white bot color-primary">EN</p>
            </div>
            <div
              class="col-md-3 col-sm-6 col-6 d-flex justify-content-center text-center">
              <img src="img/image5.png" alt="" class="arrow" />
              <p class="text-white px-2 bot text-uppercase">Awards</p>
            </div>
            <div class="col-md-7 d-sm-none"></div>
          </div>
        </div>
      </section>
      <!-- End  projects ====
        ======================================= -->
         <!-- // ---------------------  Services Splide  End----------------------// -->

      <!-- End  ====
        ======================================= -->

      <!-- Srart  ====
        ======================================= -->

      <!-- End  ====
        ======================================= -->

      <!-- Srart AWARDS ====
        ======================================= -->
        <section>
            <div class="container bg-white" id="awards">
                <div class="row">
                   
            <div class="col-md-12 d-flex justify-content-center mb-4 fw-bolder">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                        AWARDS
                    </button>
                    <span class="color-primary mt-2">/</span>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                        CERTIFICATES
                    </button>
                </div>
            </div>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active color-primary" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


                           <div class="splide" id="awards_splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                
                                <li class="splide__slide">
                                    <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-sm-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase color-primary">
                  Home Page0<br />Title Here.
                </h1>
                <p class="mt-4 scrollable-text text-black">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                  nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum iriure
                  dolor in hendrerit in vulputate velit esse molestie consequat,
                  vel illum dolore eu feugiat vero eros et accumsan et iusto
                  odio dignissim qui blandit praesent luptatum zzril delenit
                  augue.
                  <br />
                  <br />dolor in hendrerit in vulputate velit esse molestie
                  consequat, vel illum dolore eu feugiat nulla facilisis at vero
                  eros et accumsan et iusto odio dignissim qui blandit praesent
                  luptatum zzril delenit augue . Doloribus natus consequatur
                  dolores in consequuntur. Voluptates excepturi, nulla
                  consectetur, vero dolores commodi eos fugit, incidunt mollitia
                  sunt repellat? Nam, eum sed? Porro sunt excepturi dignissimos,
                  nihil sapiente, expedita aliquam, praesentium omnis adipisci
                  mollitia rem veniam at commodi doloremque perferendis sequi
                  optio ipsum! Quibusdam sit maiores omnis voluptates maxime.
                  Sit natus assumenda quam nemo aperiam ea!
                </p>
              </div>
            
              <div
                class="col-md-3 text-center text-black   py-4 mt-2 box">
                 <img src="img/awards/awards-1.jpg" alt="">
              </div>
            </div>
          </div>


                                </li>
                         
        <li class="splide__slide">
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase color-primary">
                  Home Page1<br />Title Here.
                </h1>
                <p class="mt-4 scrollable-text text-black">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                  nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum iriure
                  dolor in hendrerit in vulputate velit esse molestie consequat,
                  vel illum dolore eu feugiat vero eros et accumsan et iusto
                  odio dignissim qui blandit praesent luptatum zzril delenit
                  augue.
                  <br />
                  <br />dolor in hendrerit in vulputate velit esse molestie
                  consequat, vel illum dolore eu feugiat nulla facilisis at vero
                  eros et accumsan et iusto odio dignissim qui blandit praesent
                  luptatum zzril delenit augue . Doloribus natus consequatur
                  dolores in consequuntur. Voluptates excepturi, nulla
                  consectetur, vero dolores commodi eos fugit, incidunt mollitia
                  sunt repellat? Nam, eum sed? Porro sunt excepturi dignissimos,
                  nihil sapiente, expedita aliquam, praesentium omnis adipisci
                  mollitia rem veniam at commodi doloremque perferendis sequi
                  optio ipsum! Quibusdam sit maiores omnis voluptates maxime.
                  Sit natus assumenda quam nemo aperiam ea!
                </p>
              </div>
              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">01</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  About Us
                </p>
              </div>
            </div>
          </div>
        </li>
                                <li class="splide__slide">
                                      <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase color-primary">
                  Home Page2<br />Title Here.
                </h1>
                <p class="mt-4 scrollable-text text-black">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                  nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum iriure
                  dolor in hendrerit in vulputate velit esse molestie consequat,
                  vel illum dolore eu feugiat vero eros et accumsan et iusto
                  odio dignissim qui blandit praesent luptatum zzril delenit
                  augue.
                  <br />
                  <br />dolor in hendrerit in vulputate velit esse molestie
                  consequat, vel illum dolore eu feugiat nulla facilisis at vero
                  eros et accumsan et iusto odio dignissim qui blandit praesent
                  luptatum zzril delenit augue . Doloribus natus consequatur
                  dolores in consequuntur. Voluptates excepturi, nulla
                  consectetur, vero dolores commodi eos fugit, incidunt mollitia
                  sunt repellat? Nam, eum sed? Porro sunt excepturi dignissimos,
                  nihil sapiente, expedita aliquam, praesentium omnis adipisci
                  mollitia rem veniam at commodi doloremque perferendis sequi
                  optio ipsum! Quibusdam sit maiores omnis voluptates maxime.
                  Sit natus assumenda quam nemo aperiam ea!
                </p>
              </div>
              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">01</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  About Us
                </p>
              </div>
            </div>
          </div>
                                </li>
                            </ul>
                        </div>
                        
                    </div></div>
                        
                        <div class="tab-pane fade color-primary" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"> <div class="splide" id="certificates_splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                
                                <li class="splide__slide">
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase text-black">
                  Home Page1<br />Title Here.
                </h1>
                <p class="mt-4 scrollable-text text-black">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                  nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum iriure
                  dolor in hendrerit in vulputate velit esse molestie consequat,
                  vel illum dolore eu feugiat vero eros et accumsan et iusto
                  odio dignissim qui blandit praesent luptatum zzril delenit
                  augue.
                  <br />
                  <br />dolor in hendrerit in vulputate velit esse molestie
                  consequat, vel illum dolore eu feugiat nulla facilisis at vero
                  eros et accumsan et iusto odio dignissim qui blandit praesent
                  luptatum zzril delenit augue . Doloribus natus consequatur
                  dolores in consequuntur. Voluptates excepturi, nulla
                  consectetur, vero dolores commodi eos fugit, incidunt mollitia
                  sunt repellat? Nam, eum sed? Porro sunt excepturi dignissimos,
                  nihil sapiente, expedita aliquam, praesentium omnis adipisci
                  mollitia rem veniam at commodi doloremque perferendis sequi
                  optio ipsum! Quibusdam sit maiores omnis voluptates maxime.
                  Sit natus assumenda quam nemo aperiam ea!
                </p>
              </div>
              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">01</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  About Us
                </p>
              </div>
            </div>
          </div>
        </li>
                         
                                <li class="splide__slide">
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase text-black">
                  Home Page1<br />Title Here.
                </h1>
                <p class="mt-4 scrollable-text text-black">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                  nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum iriure
                  dolor in hendrerit in vulputate velit esse molestie consequat,
                  vel illum dolore eu feugiat vero eros et accumsan et iusto
                  odio dignissim qui blandit praesent luptatum zzril delenit
                  augue.
                  <br />
                  <br />dolor in hendrerit in vulputate velit esse molestie
                  consequat, vel illum dolore eu feugiat nulla facilisis at vero
                  eros et accumsan et iusto odio dignissim qui blandit praesent
                  luptatum zzril delenit augue . Doloribus natus consequatur
                  dolores in consequuntur. Voluptates excepturi, nulla
                  consectetur, vero dolores commodi eos fugit, incidunt mollitia
                  sunt repellat? Nam, eum sed? Porro sunt excepturi dignissimos,
                  nihil sapiente, expedita aliquam, praesentium omnis adipisci
                  mollitia rem veniam at commodi doloremque perferendis sequi
                  optio ipsum! Quibusdam sit maiores omnis voluptates maxime.
                  Sit natus assumenda quam nemo aperiam ea!
                </p>
              </div>
              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">01</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  About Us
                </p>
              </div>
            </div>
          </div>
        </li>
                                <li class="splide__slide">
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6">
                <h1 class="display-4 text-uppercase color-primary">
                  Home Page1<br />Title Here.
                </h1>
                <p class="mt-4 scrollable-text text-black">
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                  diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                  nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                  aliquip ex ea commodo consequat. Duis autem vel eum iriure
                  dolor in hendrerit in vulputate velit esse molestie consequat,
                  vel illum dolore eu feugiat vero eros et accumsan et iusto
                  odio dignissim qui blandit praesent luptatum zzril delenit
                  augue.
                  <br />
                  <br />dolor in hendrerit in vulputate velit esse molestie
                  consequat, vel illum dolore eu feugiat nulla facilisis at vero
                  eros et accumsan et iusto odio dignissim qui blandit praesent
                  luptatum zzril delenit augue . Doloribus natus consequatur
                  dolores in consequuntur. Voluptates excepturi, nulla
                  consectetur, vero dolores commodi eos fugit, incidunt mollitia
                  sunt repellat? Nam, eum sed? Porro sunt excepturi dignissimos,
                  nihil sapiente, expedita aliquam, praesentium omnis adipisci
                  mollitia rem veniam at commodi doloremque perferendis sequi
                  optio ipsum! Quibusdam sit maiores omnis voluptates maxime.
                  Sit natus assumenda quam nemo aperiam ea!
                </p>
              </div>
              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">01</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  About Us
                </p>
              </div>
            </div>
          </div>
        </li>
                            </ul>
                        </div>
                        
                    </div></div>
                    </div>
                </div>
            </div>
        </section>
      <!-- End AWARDS ====
        ======================================= -->




              <!-- Srart Team ====
        ======================================= -->
      <section class="container pb-5 pt-3" id="team">
        <div
          class="bg-tawer container text-white position-relative rounded p-5 h-100">
          <div
            class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-50"></div>
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6 mb-4">
                <h1 class="display-4 text-uppercase color-primary">
                     MESSAGE FROM
                  <br />THE CEO
                </h1>
                <p>
                  “Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi
                    enim ad minim veniam, quis nostrud exerci tation ullamcorper
                    suscipit lobortis nisl”
                </p>
                 <span class="color-primary">
                  CEO NAME
                 </span>
                 <p>
                  Chief Executive Officer

                 </p>

                 
              </div>

              
              <div
                class="col-md-2 text-center text-black bg-light py-4 mt-5 imgbox">
                <p class="h1">01</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  <!-- Our Team Leader -->
                </p>
              </div>
            </div>
          </div>

          <div class="row z-111 position-relative mt-5 pt-2 col-12">
            <div
              class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center">
              <p class="text-white bot">AR/</p>
              <p class="text-white bot color-primary">EN</p>
            </div>
            <div
              class="col-md-3 col-sm-6 col-6 d-flex justify-content-center text-center">
              <img src="img/image5.png" alt="" class="arrow" />
              <p class="text-white px-2 bot text-uppercase">Join Our Team</p>
            </div>
            <div class="col-md-7 d-sm-none"></div>
          </div>
        </div>
      </section>




            <section class="container pb-5 pt-3" id="team">
        <div
          class="bg-tawer container text-white position-relative rounded p-5 h-100">
          <div
            class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-50"></div>
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-10 mb-4">
                <h1 class="display-4 text-uppercase color-primary">
                   SAUDI TEAM
                  <br />AT THE HEART
                </h1>
         

                 
              </div>
 
              <div
                class="col-md-2 ">
                 
              </div>
              <div
                class="col-md-2 text-center text-black bg-light py-4 mt-lg-5 box mt-sm-1   light_imgbox">
                <p class="h1">02</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  <!-- Our Team Leader -->
                </p>
              </div>
              <div
                class="col-md-2 text-center text-black bg-light py-4 mt-lg-5 box mt-sm-1   light_imgbox">
                <p class="h1">04</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  <!-- Our Team Leader -->
                </p>
              </div>

              <div
                class="col-md-2 text-center text-black bg-light py-4 mt-lg-5 box mt-sm-1   light_imgbox">
                <p class="h1">05</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  <!-- Our Team Leader -->
                </p>
              </div>
              <div
                class="col-md-2 text-center text-black bg-light py-4 mt-lg-5 box mt-sm-1   light_imgbox">
                <p class="h1">06</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  <!-- Our Team Leader -->
                </p>
              </div>
              <div
                class="col-md-2 text-center text-black bg-light py-4 mt-lg-5 box mt-sm-1   light_imgbox">
                <p class="h1">07</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  <!-- Our Team Leader -->
                </p>
              </div>
              <div
                class="col-md-2 text-center text-black bg-light py-4 mt-lg-5 box mt-sm-1   light_imgbox">
                <p class="h1">08</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  <!-- Our Team Leader -->
                </p>
              </div>
            </div>
          </div>

          <div class="row z-111 position-relative mt-5 pt-2 col-12">
            <div
              class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center">
              <p class="text-white bot">AR/</p>
              <p class="text-white bot color-primary">EN</p>
            </div>
            <div
              class="col-md-3 col-sm-6 col-6 d-flex justify-content-center text-center">
              <img src="img/image5.png" alt="" class="arrow" />
              <p class="text-white px-2 bot text-uppercase">Join Our Team</p>
            </div>
            <div class="col-md-7 d-sm-none"></div>
          </div>
        </div>
      </section>
      <!-- End  Team ====
        ======================================= -->


      <!-- Srart Join ====
        ======================================= -->
      <section class="container pb-5 pt-3" id="join">
        <div
          class="bg-tawer container text-white position-relative rounded p-5 h-100">
          <div
            class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-50"></div>
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6 mb-4">
                <h1 class="display-4 text-uppercase color-primary">
                  JOIN OUR
                  <br />AMAZING TEAM!
                </h1>
                <form class="contact100-form validate-form">
                  <div
                    class="wrap-input100 validate-input col-sm-12 col-md-3 mb-3"
                    data-validate="Name is required">
                    <input
                      class="input100"
                      type="text"
                      name="name"
                      placeholder="Name" />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                  </div>

                 
                  

                  <div class="input-group mb-3">
                    <input   
                      type="file"
                      class="form-control f100"
                      id="inputGroupFile02" />
                    <label class="input-group-text" for="inputGroupFile02">
                      <!-- <i class="fa fa-file" aria-hidden="true"></i> -->
                       -
                  </label>
                  </div>
                  <div
                    class="wrap-input100 validate-input"
                    data-validate="Message is required">
                    <textarea
                      class="input100"
                      name="message"
                      placeholder="Message"></textarea>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-comment" aria-hidden="true"></i>
                    </span>
                  </div>
                </form>

                <div class="mt-1 pt-2 col-12">
                  <div
                    class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center"></div>
                  <div
                    class="col-md-3 col-sm-6 col-6 d-flex justify-content-left text-left">
                    <img src="img/image20.png" alt="" class="arrow" />
                    <p
                      class="text-white px-2 bot text-uppercase mx-2 bg-primary rounded">
                      SEND
                    </p>
                  </div>
                  <div class="col-md-7 d-sm-none"></div>
                </div>
              </div>

              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">09</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  JOIN US
                </p>
              </div>
            </div>
          </div>

          <div class="row z-111 position-relative mt-5 pt-2 col-12">
            <div
              class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center">
              <p class="text-white bot">AR/</p>
              <p class="text-white bot color-primary">EN</p>
            </div>
            <div
              class="col-md-3 col-sm-6 col-6 d-flex justify-content-center text-center">
              <img src="img/image5.png" alt="" class="arrow" />
              <p class="text-white px-2 bot text-uppercase">Footer</p>
            </div>
            <div class="col-md-7 d-sm-none"></div>
          </div>
        </div>
      </section>
      <!-- End  Join ====
        ======================================= -->

 
      <!-- Srart contact  ====
        ======================================= -->
<!-- SUCCESS contact -->
      <section class="container pb-5 pt-3" id="contact" data-scroll-index="6">
        <div
          class="bg-tawer container text-white position-relative rounded p-5 h-100">
          <div
            class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-50"></div>
          <div class="position-relative z-1">
            <div class="row align-items-center">
              <div class="col-md-2"></div>
              <div class="col-md-6 mb-4">
                <h1 class="display-4 text-uppercase color-primary">
                  SEND US
                  <br />A MESSAGE
                </h1>
                <form class="contact100-form validate-form">
                  <div
                    class="wrap-input100 validate-input col-sm-12 col-md-3"
                    data-validate="Name is required">
                    <input
                      class="input100"
                      type="text"
                      name="name"
                      placeholder="Name" />
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                  </div>

                  <div
                    class="wrap-input100 validate-input"
                    data-validate="Message is required">
                    <textarea
                      class="input100"
                      name="message"
                      placeholder="Message"></textarea>
                    <span class="focus-input100"></span>
                  </div>
                </form>
                <div class="mt-1 pt-2 col-12">
                  <div
                    class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center"></div>
                  <div
                    class="col-md-3 col-sm-6 col-6 d-flex justify-content-left text-left">
                    <img src="img/image20.png" alt="" class="arrow" />
                    <p
                      class="text-white px-2 bot text-uppercase mx-2 bg-primary rounded">
                      SEND
                    </p>
                  </div>
                  <div class="col-md-7 d-sm-none"></div>
                </div>
              </div>

              <div class="col-md-1"></div>
              <div
                class="col-md-2 text-center text-black bg-primary py-4 mt-lg-5 box mt-sm-1  ">
                <p class="h1">06</p>
                <p class="h3 text-uppercase position-absolute bottom start-20">
                  CONTACT US
                </p>
              </div>
            </div>
          </div>

          <div class="row z-111 position-relative mt-5 pt-2 col-12">
            <div
              class="col-md-2 col-sm-6 col-6 d-flex justify-content-center text-center">
              <p class="text-white bot">AR/</p>
              <p class="text-white bot color-primary">EN</p>
            </div>
            <div
              class="col-md-3 col-sm-6 col-6 d-flex justify-content-center text-center">
              <img src="img/image5.png" alt="" class="arrow" />
              <p class="text-white px-2 bot text-uppercase">Footer</p>
            </div>
            <div class="col-md-7 d-sm-none"></div>
          </div>
        </div>
      </section>
 
      <!-- End   contact ====
        ======================================= -->

             
      <section class="container pb-5 pt-3 mt-4" id="partners" data-scroll-index="10">
        
        <div
          class="bg-white container text-white position-relative rounded  px-lg-4 partners">
          <div class="col-12 bg-primary h-10 w-100 mb-5" style="height: 15px; width:120%"></div>
          <!-- <div  class="position-absolute top-0 bottom-0 start-0 end-0 bg-black opacity-50"></div> -->
          <div class="position-relative z-1 px-1  pb-5">
            <div class="row align-items-center">
               
              <div class="col-md-12 text-center  mb-4">
                <h3 class="font-weight-bold text-uppercase text-dark font-weight-bold">
                  SUCCESS PARTNERS
                </h3>

                <!-- ---------------------------------------------------- -->

                <!-- ---------------------------------------------------- -->
                
            </div>
          </div>
 
               
                    <div class="splide" id="splide3">
                        <div class="splide__track">
                            <ul class="splide__list">
                                
                                
                                <!-- <li class="splide__slide">
                                    <img src="img/parteners/partner-02.svg" alt="">
                                </li> -->
                                <li class="splide__slide">
                                    <img src="img/parteners/partner-03.jpg" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="img/parteners/partner-04.jpg" alt="">
                                </li>
                                <li class="splide__slide">
                                    <img src="img/parteners/partner-05.jpg" alt="">
                                </li>
                                <li class="splide__slide">
                                   <img src="img/parteners/partner-01.jpg" alt="">


                                </li>
                                 
                                
                            </ul>
                        </div>
                        
                    </div>
                
         
           
        </div>
      </section>
      <!-- End  PARTNERS ====
        ======================================= -->





      <!-- Srart Footer ====
        ======================================= -->
      <section>
        <!-- Footer Section -->
        <footer class="bg-black text-light pb-4">
          <div class="container bg-black">
            <div
              class="col-12 bg-primary h-10 w-100 my-5"
              style="height: 15px"></div>
            <div class="row">
              <!-- Quick Links -->
              <div class="mb-4">
                <h5
                  class="text-uppercase text-left color-primary mx-5 border-primary border-bottom col-4 py-2">
                  Quick Links
                </h5>
                <div class="row justify-content-center align-items-center">
                  <div class="col-4 col-lg-2 text-left mx-5">
                    <ul class="list-unstyled text-left text-uppercase">
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >Services</a
                        >
                      </li>
                      <li>
                        <a href="#projects" class="text-light text-decoration-none"
                          >Projects</a
                        >
                      </li>
                      <li>
                        <a href="#awards" class="text-light text-decoration-none"
                          >Awards</a
                        >
                      </li>
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >Our Team</a
                        >
                      </li>
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >Contact Us</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="col-4 col-lg-2">
                    <ul class="list-unstyled text-decoration-none">
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >News</a
                        >
                      </li>
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >Our Blog</a
                        >
                      </li>
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >Media</a
                        >
                      </li>
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >Career</a
                        >
                      </li>
                      <li>
                        <a href="#" class="text-light text-decoration-none"
                          >Location</a
                        >
                      </li>
                      <li>
                        <div
                          class="d-flex h-100 my-2"
                          style="margin-left: -12px">
                          <a
                            href="#"
                            class="text-light mx-2 bg-primary rounded px-1"
                            ><i class="fab fa-instagram fa-lg"></i
                          ></a>
                          <a
                            href="#"
                            class="text-light mx-2 bg-primary rounded px-1"
                            ><i class="fab fa-snapchat fa-lg"></i
                          ></a>
                          <a
                            href="#"
                            class="text-light mx-2 bg-primary rounded px-1"
                            ><i class="fab fa-twitter fa-lg"></i
                          ></a>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div
                    class="col-lg-5 col-12 d-flex justify-content-center text-center my-4 align-self-center">
                    <img
                      src="img/logo.png"
                      alt="Company Logo"
                      class="mb-2 mx-auto"
                      style="max-width: 300px" />
                  </div>
                </div>
              </div>

              <!-- Footer Bottom Text -->
              <div class="text-center mt-4">
                <p
                  class="mb-0 text-muted color-gray"
                  style="color: gray !important">
                  © Mockup™ 2024. All Rights Reserved.
                </p>
              </div>
            </div>
          </div>
        </footer>
      </section>
      <!-- End Footer ====
        ======================================= -->
    </main>
    <!-- Full version of jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      crossorigin="anonymous"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script src="js/custom.js"></script>
    <!-- <script>
      $(".collapse").collapse();
    </script> -->

    <!-- scrollIt -->
    <!-- <script src="js/scrollIt.min.js"></script> -->

      <script src="js/splide.manager.js"></script>
      <script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#splide3', {
            type       : 'loop',
            perPage    :4,
            perMove: 1,
            height   : '20rem',
            autoplay   : true,
            breakpoints: {
                768: { // Adjust this value for the breakpoint
                    perPage: 1,
                    height   : '10rem', // 1 per page on mobile
                },
            },
            pagination : false,
            arrows     : true,
        }).mount();
  });

            document.addEventListener('DOMContentLoaded', function () {
        new Splide('#awards_splide', {
            type       : 'loop',
            perPage    :1,
            perMove: 1,
            height   : '80vh',
            breakpoints: {
                768: { // Adjust this value for the breakpoint
                  height   : '90vh',// 1 per page on mobile
                },
            },
            autoplay   : false,
            pagination : false,
            arrows     : true,
        }).mount();
    });  
            document.addEventListener('DOMContentLoaded', function () {
        new Splide('#certificates_splide', {
            type       : 'loop',
            perPage    :1,
            perMove: 1,
            height   : '80vh',
            breakpoints: {
                768: { // Adjust this value for the breakpoint
                  height   : '90vh',// 1 per page on mobile
                },
            },
            autoplay   : true,
            pagination : false,
            arrows     : true,
        }).mount();
    });
     document.addEventListener('DOMContentLoaded', function () {
        new Splide('#projects_splide', {
            type       : 'loop',
            perPage    :1,
            perMove: 1,
            height   : '80vh',
            autoplay   : true,
            pagination : false,
            arrows     : true,
        }).mount();
    });

    var splide = new Splide( '#projects_splide2', {
  perPage : 4,
  type       : 'loop',
  perMove: 1,
  cover   : true,
  height  : '7rem',
  lazyLoad: 'nearby',
  breakpoints: {
    height: '3rem',
  },
  autoplay   : true,
  pagination : false,
  arrows     : true,
} );

splide.mount();
</script>
  </body>
</html>