<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HairSal &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="../fontawesome/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/magnific-popup.css">
    <link rel="stylesheet" href="../css/css/jquery-ui.css">
    <link rel="stylesheet" href="../css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fontawesome/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="../css/css/aos.css">

    <link rel="stylesheet" href="../css/css/style.css">

    



  </head>
  <body>

  <?php 
       require('../controllers/product_controller.php');    
    ?>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    </head>
  <body>
  <?php 
  
  session_start();
  if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'])){
    header('location:../login/login.php');
  }
  
  
  
  $id = $_SESSION['customer_id'];
   
      
 
      
        
      
    ?>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-1" role="banner">

<div class="container-fluid">
  <div class="row align-items-center">
    
    <div class="col-6 col-xl-2" data-aos="fade-down">
      <h1 class="mb-0"><a href="../index.php" class="text-black h2 mb-0">DiasBeauty</a></h1>
    </div>
    <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
      <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
          <li class="has-children">
            <a href="../index.php">Home</a>
            
          </li>
          <li  class="has-children active">
                           <a href="all_products.php">Products</a>

                         <ul class="dropdown">
                          <?php
                        $result1= select_all_categories_ctr();
                        foreach ($result1 as $record){
                          
                        ?>
                        
                        
                        <li> <a href="categoryproduct.php?id=<?php echo $record['cat_id']?>"><?php echo $record['cat_name'];?>
                       </a>
                        </li>
                       <?php
                        }
                       ?>

                        </ul>
                       
                </li>
          <li class="has-children active">
            <a href="services.php">Services</a>
            <ul class="dropdown">
                 <?php
                        $result2= select_all_servicecategories_ctr();
                        foreach ($result2 as $record){
                          
                ?>
              <li><a href="categoryservice.php?id=<?php echo $record['scat_id']?>"><?php echo $record['scat_name'];?></a>
              </li>
                      <?php
                        }
                       ?>
            
            </ul>
          </li>

          <li><a href="about.php">About</a></li>
          
  
        </ul>
      
       
        

        
      </nav>
    </div>
   
<div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                
                <?php 

        
if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'])) {
 
?>
                <li>
                <a href="../login/login.php" class="pl-3 pr-3 text-black">LOGIN</a>
                </li>

                <li>
                  <a href="../login/register.php"" class="pl-3 pr-3 text-black">REGISTER</a>
                </li>
                
                <?php }
                
                else {      
                    $id = $_SESSION['customer_id'];

                    $total1 = count_servicecart_ctr($id);
                    $total2 = count_cart_ctr($id);
                    $total3= $total1["count"]+$total2["count"]; ?>
                <li>
               
                <a style="padding-right: -10px; ;" href="shoping-cart.php" ><span style="color:black;" class="icon-shopping-cart"><?php echo $total3;?></p></span></a><p style="position:top; padding-left:-10px;">
               
                </li>
                  <li>
                  <a href="../actions/logoutprocess.php" class="pl-3 pr-3 text-black" >LOGOUT</a>
                  
                </li>

                <li>
                  <a href="profile.php" class="pl-3 pr-3 text-black"  >BOOKINGS</a>
                  
                </li>

               <?php }?>

                
                
              </ul>
            </div>


          </div>

</header>


    <div class="slide-one-item home-slider owl-carousel">

   
      <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light mb-4 display-1 line-height-1">Hair Style &amp; Prices</h2>

              <p><a href="#" class="btn btn-black py-3 px-5">Book Now!</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>
  



    <div class="site-section">
      <div class="container">

      
                      
                       
        
        <div class="row">
        
         

        </div>
      </div>
    </div>
 
    <?php


if(isset($_GET['id'])){
 $products = select_one_product_ctr($_GET['id']);


}


   ?>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="<?php echo $products['product_image'] ?>" alt="Image" width="100%">
          </div>
          <div class="col-lg-6 bg-white p-md-5 align-self-center">
            <h2 class="display-1 text-black line-height-1 site-section-heading mb-4 pb-3"><?php echo $products['product_title'] ?></h2>
            <p class="text-black lead"><em>&ldquo;<?php echo $products['product_desc'] ?></em></p>
            <p class="lead text-black">&mdash; <em> GHC<?php echo $products['product_price'] ?>.00</em></p>
            <p><strong class="font-weight-bold text-primary">ADD TO CART</strong> <a href="../actions/add_cart.php?id=<?php echo $products['product_id']?>" class="pl-0 pr-3 text-black"><span class="icon-shopping-cart"></span></a>   </p>
          </div>
        </div>
      </div>
    </div>
   

    
    
    <div class="site-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-4 text-black">We want your hair to look fabulous</h2>
            <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5 text-white">Visit Our Salon Now</a></p>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Hairsal</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Menu</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Barbers</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Team</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Membership</a></li>
                </ul>
              </div>
            </div>

            

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
           

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>

            </div>

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>

            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="../js/js/jquery-3.3.1.min.js"></script>
  <script src="../js/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/js/jquery-ui.js"></script>
  <script src="../js/js/popper.min.js"></script>
  <script src="../js/js/bootstrap.min.js"></script>
  <script src="../js/js/owl.carousel.min.js"></script>
  <script src="../js/js/jquery.stellar.min.js"></script>
  <script src="../js/js/jquery.countdown.min.js"></script>
  <script src="./js/js/jquery.magnific-popup.min.js"></script>
  <script src="../js/js/bootstrap-datepicker.min.js"></script>
  <script src="../js/js/aos.js"></script>

  <script src="../js/js/main.js"></script>
 
  </body>
</html>