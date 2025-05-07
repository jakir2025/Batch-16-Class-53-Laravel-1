<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shoutcut icon" type="img/icon img.jpg" href="img/icon img.jpg">
    <link rel="stylesheet" href="frontend/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <title>Landing Page Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- <header class="header-section">
        <div class="hero-contant">
            
                <div >
                    <img src="img/best-delicious-food-wallpaper-preview 1920x1080_1920x1080.jpg" alt="">
                    <h1>All Time Honeycomb</h1>
                    <p>Lots of delicious food. Once you eat it, you will be looking for it for the rest of your life.</p>
                    <a href="#checkout" class="btn-custom">buy new</a>
                </div>
        </div>
    </header> -->

    <header class="header-section">
                  <img src="frontend/img/best-delicious-food-wallpaper-preview 1920x1080_1920x1080.jpg" alt="" class="img-responsive">
        <div class="hero-contant">
                  <div >
                    <h1>All Time Honeycomb</h1>
                    <p>Lots of delicious food. Once you eat it, you will be looking for it for the rest of your life.</p>
                    <a href="#checkout" class="btn-custom">buy new</a>
                </div>
        </div>
    </header>




    <!--Product Discription section -->

    <section class="feature-section">
        <div class="container">
            <h2>Why Choose Our Product.</h2>
            <div class="row ">
                <div class="col-sm-12 col-md-4 col-lg-4">
                     <div class="feature-card">
                        <img src="frontend/img/image-1-60x60_60x60.jpg" alt="">
                        <h5>Feature-1</h5>
                        <p>This is premium product </p>
                     </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                   <div class="feature-card">
                       <img src="frontend/img/image-2-60-60_60x60.jpg" alt="">
                       <h5>Feature-1</h5>
                       <p>This is premium product </p>
                   </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div  class="feature-card">
                         <img src="frontend/img/image-1-60x60_60x60.jpg" alt="">
                         <h5>Feature-1</h5>
                         <p>This is premium product </p>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                     <div class="feature-card">
                        <img src="frontend/img/image-2-60-60_60x60.jpg" alt="">
                        <h5>Feature-1</h5>
                        <p>This is premium product </p>
                     </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                      <div class="feature-card">
                           <img src="frontend/img/image-1-60x60_60x60.jpg" alt="">
                           <h5>Feature-1</h5>
                           <p>This is premium product </p>
                      </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                       <div class="feature-card">
                           <img src="frontend/img/image-2-60-60_60x60.jpg" alt="">
                           <h5>Feature-1</h5>
                           <p>This is premium product </p>
                       </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- customer Review -->
    <section class="reveiw-section">
        <div class="container">
            <hr>
            <h2 >What our customers Review</h2>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                          <div class="review-card">
                             <img src="frontend/img/r-1_70x70.jpg" alt="">
                             <h5>This is an amazing product</h5>
                             <p>Customar name</p>
                             <div id="star-rating" class="star-review">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                            </div>
                            <p>Your Rating: <span id="rating-value">0</span> stars</p>
                          </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                         <div class="review-card">
                            <img src="frontend/img/r-3_70x70.jpg" alt="">
                            <h5>This is an amazing product</h5>
                            <p>Customar name</p>
                            <div id="star-rating" class="star-review">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                            </div>
                            <p>Your Rating: <span id="rating-value">0</span> stars</p>
                         </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                           <div class="review-card">
                              <img src="frontend/img/r-2_69x70.jpg" alt="">
                              <h5>This is an amazing product</h5>
                              <p>Customar name</p>
                              <div id="star-rating" class="star-review">
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                            </div>
                            <p>Your Rating: <span id="rating-value">0</span> stars</p>
                           </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="review-card">
                       <img src="frontend/img/r-1_70x70.jpg" alt="">
                       <h5>This is an amazing product</h5>
                       <p>Customar name</p>
                       <div id="star-rating" class="star-review">
                          <span class="star" data-value="1">&#9733;</span>
                          <span class="star" data-value="2">&#9733;</span>
                          <span class="star" data-value="3">&#9733;</span>
                          <span class="star" data-value="4">&#9733;</span>
                          <span class="star" data-value="5">&#9733;</span>
                      </div>
                      <p>Your Rating: <span id="rating-value">0</span> stars</p>
                    </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">
                   <div class="review-card">
                      <img src="frontend/img/r-3_70x70.jpg" alt="">
                      <h5>This is an amazing product</h5>
                      <p>Customar name</p>
                      <div id="star-rating" class="star-review">
                          <span class="star" data-value="1">&#9733;</span>
                          <span class="star" data-value="2">&#9733;</span>
                          <span class="star" data-value="3">&#9733;</span>
                          <span class="star" data-value="4">&#9733;</span>
                          <span class="star" data-value="5">&#9733;</span>
                      </div>
                      <p>Your Rating: <span id="rating-value">0</span> stars</p>
                   </div>
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">
                     <div class="review-card">
                        <img src="frontend/img/r-2_69x70.jpg" alt="">
                        <h5>This is an amazing product</h5>
                        <p>Customar name</p>
                        <div id="star-rating" class="star-review">
                          <span class="star" data-value="1">&#9733;</span>
                          <span class="star" data-value="2">&#9733;</span>
                          <span class="star" data-value="3">&#9733;</span>
                          <span class="star" data-value="4">&#9733;</span>
                          <span class="star" data-value="5">&#9733;</span>
                      </div>
                      <p>Your Rating: <span id="rating-value">0</span> stars</p>
                     </div>
          </div>

              
                

              </div>
        </div>
    </section>

    

    <!-- Product Checkour Form -->

    <section class="checkout-section" id="checkout">
          <div class="container">
              <hr>
            <h2>Chechout</h2>
            <form action="" method="get" class="checkout-form">
                   <div class="mb-3">
                    <label for="" class="form-lebal">Full Name*</label>
                    <input type="text" class="form-control custom-input" name="" id="" value="" placeholder="Your Full name*" required>
                   </div>
                   <div class="mb-3">
                    <label for="" class="form-lebal">Phone Number*</label>
                    <input type="text" class="form-control custom-input" name="" id="" value="" placeholder="Your Phone Number*" required>
                   </div>
                   
                   <div class="mb-3">
                    <label for="" class="form-lebal">Address*</label>
                    <textarea name="" class="form-control custom-input" id="" cols="30" rows="5"></textarea>
                   </div>

                   <div class="mb-3">
                    <label for="" class="form-lebal">Area*</label>
                    <select name="" id="" class="form-control custom-input">
                        <option value="" selected disabled>select area</option>
                        <option value="">in-site Dhaka-80tk</option>
                        <option value="">out-site Dhaka-160tk</option>
                    </select>
                   </div>

                   <button type="button" class="btn btn-info">Confirm Order</button>
            </form>
          </div>
    </section>

    <!-- footer -->
     <footer class="footer-section">
        <div class="container">
            <div class="footer-contant">
                <div class="footer-img">
                    <img src="https://placehold.co/150x60" alt="">
                </div>
                <div class="social-icons">
                    <a  href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
                <p>&copy 2024 langdingpage. All rights reserved</p>
            </div>
        </div>
     </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>