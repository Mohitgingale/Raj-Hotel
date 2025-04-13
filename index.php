<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R@J Hotel -Home </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('includes/links.php'); ?>
        <style> 
        .Availability-form{
          margin-top: -50px;
          z-index: 2;
          position: relative;

        }
        @media screen and (max-width:575px) {
          .Availability-form{
          margin-top: 25px;
          padding: 0 , 35px;

        }
        }
            </style>
    </head>
    
  <body class="bg-light">
    
    <?php require('includes/header.php');    ?>
  

    <!-- Caroulsel -->
      <div class="main px-lg-4 mt-4" >   
        <!-- Swiper -->
        <div class="swiper mySwiper">
          
            <div class="swiper-wrapper  ">
                <div class="swiper-slide  ">
                  <img src="images/Rooms/1.jpg" class="w-100  d-block" height="400px"   />
                </div>
                <div class="swiper-slide">
                  <img src="images/Rooms/2.jpg" class="w-100 d-block" height="400px"/>
                </div>
                <div class="swiper-slide">
                  <img src="images/Rooms/3.jpg" class="w-100 d-block" height="400px"/>
                </div>
                <div class="swiper-slide">
                  <img src="images/Rooms/4.jpg" class="w-100 d-block" height="400px"/>
                </div>
              <!-- <div class="swiper-slide">
                <img src="images/5.jpg" class="w-100 d-block" height="500vh"/>
              </div>
              <div class="swiper-slide">
                <img src="images/6.jpg" class="w-100 d-block" height="500vh"/>
              </div> -->
            </div>
        
        </div>
      </div>

      <!-- Check Availability Rooms -->

        <div class="container Availability-form">

            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                  <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                              <label  class="form-label" style="font-weight:500">Check-in</label>
                              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="col-lg-3 mb-3">
                              <label  class="form-label" style="font-weight:500">Check-out</label>
                              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                                <div class="col-lg-3 mb-3">
                                  <label  class="form-label" style="font-weight:500">Adult</label>
                                  <select class="form-select shadow-none" >
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                </div>
                                <div class="col-lg-2 mb-3">
                                  <label  class="form-label" style="font-weight:500">Children</label>
                                  <select class="form-select shadow-none" >
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select> 
                                </div>
                                  <div class="col-lg-1 mb-lg-3 mt-2">
                                    <button type="submit" class="btn text-white shadow-lg custum-bg">Submit</button>
                                  </div>
                        </div>     
                    </form>
                </div>
            </div>
        </div>






       <!-- OUR Rooms  -->
      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS  </h2>
          <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 my-3"> 
                  <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
                    <img src="images/Rooms/9.jpg" class="card-img-top" >
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                          <h6 class="mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                             Wifi
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Television
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            AC
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            RomHeater
                          </span>
                        </div>
                        <div class="Guests mb-4">
                          <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                             Wifi
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            5 Adults
                          </span>
                        </div>
                        <div class="rating mb-4">
                          <h6 class="mb-1">Rating</h6>
                          <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                          <a href="#" class="btn btn-sm text-white custum-bg shadow-none">Book Now</a>
                          <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>

                        </div>

                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-md-6 my-3"> 
                  <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
                    <img src="images/Rooms/8.jpg" class="card-img-top" >
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                          <h6 class="mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                             Wifi
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Television
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            AC
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            RomHeater
                          </span>
                        </div>
                        <div class="Guests mb-4">
                          <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                             Wifi
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            5 Adults
                          </span>
                        </div>
                        <div class="rating mb-4">
                          <h6 class="mb-1">Rating</h6>
                          <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                          <a href="#" class="btn btn-sm text-white custum-bg shadow-none">Book Now</a>
                          <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>

                        </div>

                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-md-6 my-3"> 
                  <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
                    <img src="images/Rooms/1.jpg" class="card-img-top" >
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">₹200 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              2 Rooms
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              1 Bathroom
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              1 Balcony
                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                              3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                          <h6 class="mb-1">Facilities</h6>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                             Wifi
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Television
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            AC
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            RomHeater
                          </span>
                        </div>
                        <div class="Guests mb-4">
                          <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                             Wifi
                          </span>
                          <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            5 Adults
                          </span>
                        </div>
                        <div class="rating mb-4">
                          <h6 class="mb-1">Rating</h6>
                          <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                          <a href="#" class="btn btn-sm text-white custum-bg shadow-none">Book Now</a>
                          <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-lg">More Rooms >>></a>
                </div>
              </div>
          </div>

        <!-- OUR Facilities  -->
       <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES  </h2>
          <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/wifi.svg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="images/features/television.svg" width="80px">
                  <h5 class="mt-3">Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="images/features/ac.svg" width="80px">
                  <h5 class="mt-3">AC</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="images/features/rh.svg" width="80px">
                  <h5 class="mt-3">Room Heater</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                  <img src="images/features/parking.svg" width="80px">
                  <h5 class="mt-3">Parking</h5>
                </div>
                
                <div class="col-lg-12 text-center mt-5">
                  <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-lg">More Facilities >>></a>
                </div>
            </div>
          </div>

        <!-- Testimonials  -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>

          <div class="container mt-5">
             <!-- Swiper -->
            <div class="swiper swiper-testimonials">
              <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                  <div class="profile d-flex align-items-center mb-3">
                    <img src="images/New folder/2.png" width="30px">
                    <h6 class="m-0 ms-2">Random User1</h6>
                  </div>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae. Illo delectus amet quod nam sunt voluptate temporibus iste placeat.</p>
                  <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </div>
                </div>

              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                  <img src="images/New folder/2.png" width="30px">
                  <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae. Illo delectus amet quod nam sunt voluptate temporibus iste placeat.</p>
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>

              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                  <img src="images/New folder/2.png" width="30px">
                  <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, molestiae. Illo delectus amet quod nam sunt voluptate temporibus iste placeat.</p>
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
              </div>
             </div>
              <div class="swiper-pagination"></div>
            </div>

            <div class="col-lg-12 text-center mt-5">
              <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-lg">Know More >>></a>
            </div>
          </div>


        <!-- Reach us  -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-8 P-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded mb-4 " height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59581.24544972378!2d75.80967805!3d21.039573450000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd9a61556423e47%3A0x47f833853d8103a6!2z4KSt4KWB4KS44KS-4KS14KSzLCDgpK7gpLngpL7gpLDgpL7gpLfgpY3gpJ_gpY3gpLA!5e0!3m2!1smr!2sin!4v1725266929207!5m2!1smr!2sin" ></iframe>          
              </div>
              <div class="col-lg-4 col-md-4">
                  <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +919370940227" class="d-inline-block mb-2 text-decoration-none text-dark">
                      <i class="bi bi-telephone-fill"></i>+919370940227
                    </a>
                    <br>
                    <a href="tel: +919370940227" class="d-inline-block text-decoration-none text-dark">
                      <i class="bi bi-telephone-fill"></i>+919370940227
                    </a>
                  </div>
                  <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                      <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i>Twitter 
                      </span>
                    </a>
                  <br>
                    <a href="#" class="d-inline-block mb-3">
                      <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>Facebook 
                      </span>
                    </a>
                  <br>
                    <a href="#" class="d-inline-block">
                      <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i>Instagram 
                      </span>
                    </a>
                    
                  </div>
              </div>
            </div>
          </div>

          


                  <?php require('includes/footer.php'); ?>
                  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop:true,
        autoplay:{
          delay:3500,
          disableOnInteraction:false,
        }
        
      });

      var swiper = new Swiper(".swiper-testimonials", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          slidesPerView:"3",
          loop:true,
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
          },
          pagination: {
            el: ".swiper-pagination",
          },
          breakpoints:{
            320:{
              slidesPerView:1,
            },
            640:{
              slidesPerView:1,
            },
            768:{
              slidesPerView:2,
            },
            1024:{
              slidesPerView:3,
            },
          }

        });
    </script>
  </body>
</html>

