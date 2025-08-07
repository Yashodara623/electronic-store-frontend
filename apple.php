<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Apple Mobiles</title>

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
                
                <section id="partner">
                    <div class="logo-container">
                        <a href="samsung.php"><img src="resources/logos/samsung_logo.png" alt=""></a>
                        <a href="huawei.php"><img src="resources/logos/huawei_logo.png" alt=""></a>
                        <a href="honor.php"><img src="resources/logos/honor_logo_01.png" alt=""></a>
                    </div>
                </section>

                <div class="col-12">
                    <div class="row">

<!-- ------------------------------------product------------------------------------------------ -->
<section id="popular-product">

<div class="product-heading">
    <h3>Apple iPhone Products</h3>
     <a>All</a>
</div>

<div class="popular-product-container">

    <!-- --------------------------------box1----------------------------------- -->
    <div class="product-box">
        <a href="#" class="product-img">
            <img src="resources/smartphones/AP-14-128GB-MB-01.png">
        </a>

        <div class="product-text">
            <a href="#" class="product-box-p-name">Apple iPhone 14</a>
            <span class="p-box-category">
                <a>Smartpones</a> > <a>Apple</a>
            </span>
            <p>AP-14-128GB-MB-01</p>
            <span class="p-box-price">LKR 309,999</span>
            <del>LKR 329,999</del>
        </div>
    </div>

    <!-- ----------------------------box end ---------------------------------->

    <!-- --------------------------------box2----------------------------------- -->
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

    <!-- --------------------------------box3----------------------------------- -->
    <div class="product-box">
        <a href="#" class="product-img">
            <img src="resources/smartphones/AP-15-128GB-BU-01.png">
        </a>

        <div class="product-text">
            <a href="#" class="product-box-p-name">Apple iPhone 15</a>
            <span class="p-box-category">
                <a>Smartpones</a> > <a>Apple</a>
            </span>
            <p>AP-15-128GB-BU-01</p>
            <span class="p-box-price">LKR 371,290</span>
        </div>
    </div>

    <!-- ----------------------------box end ---------------------------------->

    <!-- --------------------------------box4----------------------------------- -->
    <div class="product-box">
        <a href="#" class="product-img">
            <img src="resources/smartphones/AP-15-PRO-128GB-B-01.png">
        </a>

        <div class="product-text">
            <a href="#" class="product-box-p-name">Apple iPhone 15 Pro</a>
            <span class="p-box-category">
                <a>Smartpones</a> > <a>Apple</a>
            </span>
            <p>AP-15-PRO-128GB-B-01</p>
            <span class="p-box-price">LKR 471,190</span>
        </div>
    </div>

    <!-- ----------------------------box end ---------------------------------->

</div>
 
</section>

                    </div>
                </div>


    
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