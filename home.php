<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Titans.lk</title>

        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">

        <link rel="shortcut icon" href="resources/logo3.svg">

    </head>
    <body>

        <div class="container-fluid">
            <div class="row">   

            <?php include "header.php"; ?>
                <hr>

                <div class="col-12">
                    <div class="row">
                   
                        <!-- ---------------------------------------------Carousel ---------------------------------------------------------- -->
                        <div class="col-12 d-none d-lg-block mb-3"> 
                            <div class="row">

                                <div id="carouselExampleIndicators" class="offset-2 col-8 carousel slide carousel-fade" data-bs-ride="true">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>   
                                    </div>

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="resources/carousel/poster_1.jpg" class="d-block w-100 poster-img-1">
                                            <div class="carousel-caption d-none d-md-block poster-caption">
                                                <h5 class="poster-title">Welcome to TITANS.LK</h5>
                                                <p class="poster-text">Sri Lanka's No.01 Online Store</p>
                                            </div>
                                        </div>
                                        
                                        <div class="carousel-item bg-primary">
                                            <span><img src="resources/carousel/p50-pocket.jpg" class="d-block w-100 poster-img-1">
                                        </div>
                                        
                                        <div class="carousel-item bg-primary">
                                            <img src="resources/carousel/Dell.png" class="d-block poster-img-1">
                                            <div class="carousel-caption d-none d-md-block poster-caption-1">
                                                <h5 class="poster-title">Built to Enhance Your Power</h5>
                                                <p class="poster-text">Powerful Laptops for Your Home or Office</p>
                                            </div>
                                        </div>
                                        
                                        <div class="carousel-item bg-primary">
                                            <span><img src="resources/carousel/poster.jpg" class="d-block w-100 poster-img-1">
                                        </div>
                                        
                                        <div class="carousel-item bg-primary">
                                            <span><img src="resources/carousel/poster_3.png" class="d-block w-100 poster-img-1">
                                            <div class="carousel-caption d-none d-md-block poster-caption-2">
                                                <h5 class="poster-title">EVERYTHING YOU NEED</h5>
                                                <p class="poster-text">Tech to Stay Connected <br> Brighten your day with tech that fits your style.</p>
                                            </div>
                                        </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                </div>
                            
                            </div>
                        </div>
                        <!-- -------------------------------------------Carousel end-------------------------------------------- -->

                        <!-- ------------------------------logo's--------------------------------------------------------------- -->
                        <section id="partner">
                            <div class="logo-container">
                                <a href="apple.php"><img src="resources/logos/apple_logo.png" alt=""></a>
                                <a href="samsung.php"><img src="resources/logos/samsung_logo.png" alt=""></a>
                                <a href="huawei.php"><img src="resources/logos/huawei_logo.png" alt=""></a>
                                <a href="honor.php"><img src="resources/logos/honor_logo_01.png" alt=""></a>
                                <a href="asus.php"><img src="resources/logos/asus_logo.png" alt=""></a>
                                <a href="dell.php"><img src="resources/logos/dell_logo.png" alt=""></a>
                            </div>
                        </section>
                        <!-- --------------------------------------------logo's end---------------------------------------------- -->

                        <!-- -------------------------------recent products-------------------------------------------------------------- -->
                        <section class="recent-product">

                            <div class="product-heading">
                                <h3>Recent Products</h3>
                                <a>All</a>
                            </div>

                        <div class="r-product-container">
                            <!-- -----------------------------box1------------------------------------------ -->
                            <div class="r-product-box">
                                <div class="r-product-img">
                                    <img src="resources/smartphones/SMG-SM-M146B-128GB-BU-01.png" alt="">
                                </div>
                                <div class="r-product-text">
                                    <a href="honorx8a.php" class="product-box-p-name">Samsung Galaxy M14 5G</a>
                                    <span class="p-box-category">
                                        <a>Smartphones</a> > <a>Samsung</a>
                                    </span>
                                    <span class="p-box-price">LKR 78,999 <del>LKR 86,999</del></span>
                                </div>
                            </div>  <!-- -------------------------------box end----------------------------- -->

                            <!-- ------------------------box2------------------------------------------------ -->
                            <div class="r-product-box">
                                <div class="r-product-img">
                                    <img src="resources/smartphones/HU-NOVA-Y71-B-01.png" alt="">
                                </div>
                                <div class="r-product-text">
                                    <a href="#" class="product-box-p-name">Huawei nova Y71</a>
                                    <span class="p-box-category">
                                        <a>Smartphones</a> > <a>Huawei</a>
                                    </span>
                                    <span class="p-box-price">LKR 56,965 <del>LKR 64,999</del></span>
                                </div>
                            </div>  <!-- ---------------------box end---------------------------------------- -->
                            
                            <!-- ----------------------------------------box3-------------------------------- -->
                            <div class="r-product-box">
                                <div class="r-product-img">
                                    <img src="resources/smartphones/HON-X6A-4-128-BLK-01.png" alt="">
                                </div>
                                <div class="r-product-text">
                                    <a href="#" class="product-box-p-name">HONOR X6A</a>
                                    <span class="p-box-category">
                                        <a>Smartphones</a> > <a>HONOR</a>
                                    </span>
                                    <span class="p-box-price">LKR 47,499</span>
                                </div>
                            </div>  <!-- ----------------------------box end------------------------------------- -->
                            
                            <!-- -------------------------------------box4----------------------------------------- -->
                            <div class="r-product-box">
                                <div class="r-product-img">
                                    <img src="resources/laptops/DELL3530-I5-8GB512-BLK-01.png" alt="">
                                </div>
                                <div class="r-product-text">
                                    <a href="#" class="product-box-p-name">Dell Inspiron 3530</a>
                                    <span class="p-box-category">
                                        <a>Laptops</a> > <a>Dell</a>
                                    </span>
                                    <span class="p-box-price">LKR 259,999</span>
                                </div>
                            </div>  <!-- ---------------------------------box end--------------------------------- -->
                            
                            <!-- ------------------------------------box5----------------------------------------- -->
                            <div class="r-product-box">
                                <div class="r-product-img">
                                    <img src="resources/laptops/ASU_AS-I3-11G-256-K513-219-SL-01.png" alt="">
                                </div>
                                <div class="r-product-text">
                                    <a href="#" class="product-box-p-name">ASUS VivoBook 15 i3</a>
                                    <span class="p-box-category">
                                        <a>Laptops</a> > <a>ASUS</a>
                                    </span>
                                    <span class="p-box-price">LKR 165,599 <del>LKR 275,999</del></span>
                                </div>
                            </div>  <!-- ---------------------------box end--------------------------------------- -->
                            
                            <!-- -----------------------------------box6------------------------------------------ -->
                            <div class="r-product-box">
                                <div class="r-product-img">
                                    <img src="resources/laptops/AS-D-I3-12G-512-X1502-793-01.png" alt="">
                                </div>
                                <div class="r-product-text">
                                    <a href="#" class="product-box-p-name">ASUS Vivobook 15 X1502 i3</a>
                                    <span class="p-box-category">
                                        <a>Laptops</a> > <a>ASUS</a>
                                    </span>
                                    <span class="p-box-price">LKR 251,999 <del>LKR 279,999</del></span>
                                </div>
                            </div>  <!-- --------------------------box end------------------------------------------ -->
                        </div>


                        </section>
                        <!-- ----------------------------recent products end----------------------------------------- -->

                    </div>
                </div>

                <!-- -------------------------------------Sale--------------------------------------------------- -->
                <section class="sale">

                <!-- ---------------box------------------- -->
                    <div class="sale-box">
                        <img src="resources/sale_12.jpg">
                        <a href="#" class="sale-text">
                            <strong>Powerful Laptops for Your Home or Office</strong>
                            <span>Sale Off 25%</span>
                        </a>
                    </div>
                <!-- ---------------box------------------- -->
                    <div class="sale-box">
                        <img src="resources/sale_2.png">
                        <a href="#" class="sale-text">
                            <strong>Enhance Your Mobile Experience</strong>
                            <span>Sale Off 25%</span>
                        </a>
                    </div>

                </section>
                <!-- ----------------------------------------------Sale end------------------------------------------ -->

                <!-- ------------------------------Popular products--------------------------------- -->
                <section id="popular-product">

                    <div class="product-heading">
                        <h3>Popular Products</h3>
                         <a>All</a>
                    </div>

                    <div class="popular-product-container">

                        <!-- --------------------------------box1----------------------------------- -->
                        <div class="product-box">
                            <a href="#" class="product-img">
                                <img src="resources/smartphones/HU-NOVA-Y90-BLUE-01.png">
                            </a>

                            <div class="product-text">
                                <a href="#" class="product-box-p-name">Huawei nova Y90</a>
                                <span class="p-box-category">
                                    <a>Smartpones</a> > <a>Huawei</a>
                                </span>
                                <p>HU-NOVA-Y90-BLUE-01</p>
                                <span class="p-box-price">LKR 77,950</span>
                            </div>
                        </div>

                        <!-- ----------------------------box end ---------------------------------->

                        <!-- --------------------------------box2----------------------------------- -->
                        <div class="product-box">
                            <a href="#" class="product-img">
                                <img src="resources/laptops/DELL3525-R7-8GB512-SIL-01.png">
                            </a>

                            <div class="product-text">
                                <a href="#" class="product-box-p-name">Dell Inspiron 3525</a>
                                <span class="p-box-category">
                                    <a>Laptops</a> > <a>Dell</a>
                                </span>
                                <p>DELL3525-R7-8GB512-SIL-01</p>
                                <span class="p-box-price">LKR 271,349</span>
                            </div>
                        </div>

                        <!-- ----------------------------box end ---------------------------------->
                    
                        <!-- --------------------------------box3----------------------------------- -->
                        <div class="product-box">
                            <a href="#" class="product-img">
                                <img src="resources/smartphones/HON-X8A-8-128-GRN-01.png">
                            </a>

                            <div class="product-text">
                                <a href="#" class="product-box-p-name">HONOR X8A</a>
                                <span class="p-box-category">
                                    <a>Smartpones</a> > <a>HONOR</a>
                                </span>
                                <p>HON-X8A-8-128-GRN-01</p>
                                <span class="p-box-price">LKR 74,999</span>
                            </div>
                        </div>

                        <!-- ----------------------------box end ---------------------------------->
                    
                        <!-- --------------------------------box4----------------------------------- -->
                        <div class="product-box">
                            <a href="#" class="product-img">
                                <img src="resources/laptops/DELL9310-I5-8GB-SIL-MSO-01.png">
                            </a>

                            <div class="product-text">
                                <a href="#" class="product-box-p-name">Dell XPS 13 9310 i5</a>
                                <span class="p-box-category">
                                    <a>Laptops</a> > <a>Dell</a>
                                </span>
                                <p>DELL9310-I5-8GB-SIL-MSO-01</p>
                                <span class="p-box-price">LKR 408,000</span>
                            </div>
                        </div>

                        <!-- ----------------------------box end ---------------------------------->
                    
                        <!-- --------------------------------box5----------------------------------- -->
                        <div class="product-box">
                            <a href="#" class="product-img">
                                <img src="resources/smartphones/AP-14-PROMAX-256GB-DPR-01.png">
                            </a>

                            <div class="product-text">
                                <a href="#" class="product-box-p-name">Apple iPhone 14 Pro Max</a>
                                <span class="p-box-category">
                                    <a>Smartpones</a> > <a>Apple</a>
                                </span>
                                <p>AP-14-PROMAX-256GB-DPR-01</p>
                                <span class="p-box-price">LKR 489,999</span>
                                <del>LKR 523,999</del>
                            </div>
                        </div>

                        <!-- ----------------------------box end ---------------------------------->
                    
                    </div>
                     
                </section>
                <!-- ------------------------------Popular products end--------------------------------------------- -->

                
                <!-- --------------------------------------------services ---------------------------------------------->
                <section class="services">
                    <!-- -------------box1-------------------- -->
                    <div class="services-box">
                        <i class="bi bi-truck"></i>
                        <span>Islandwide Delivery</span>
                        <p>Free Shipping for Selected Products</p>
                    </div>
                    
                    <!-- ---------------box2------------------- -->
                    <div class="services-box">
                        <i class="bi bi-headset"></i>
                        <span>Support 24/7</span>
                        <p>Provide 24/7 Service</p>
                    </div>

                    <!-- ---------------box3-------------------- -->
                    <div class="services-box">
                        <i class="bi bi-arrow-repeat"></i>
                        <span>100% Warranty</span>
                        <p>With After Sales Service</p>
                    </div>
                </section>
                <!-- ----------------------------------services end--------------------------------------------->

                <?php include "footer.php"; ?>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>

        <script>
            $(document).ready(function() {
                $('#autoWidth').lightSlider({
                    autoWidth:true,
                    loop:true,
                    onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
        });  
      });
            
        </script>

    </body>

</html>