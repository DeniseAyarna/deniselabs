<?php
session_start();
if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'])){
	header('location:../login/login.php');
}

require('../controllers/product_controller.php');

$id = $_SESSION['customer_id'];
$email=$_SESSION['customer_email']



   // $total = check_total($id, getenv("REMOTE_ADDR"));

    // foreach($total as $total)

    // $_SESSION["total"] = $total["total"];




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="../fontawesome/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/css/magnific-popup.css">
    <link rel="stylesheet" href="../css/css/jquery-ui.css">
    <link rel="stylesheet" href="../css/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/cartfonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../fontawesone/cartfonts/linearicons-v1.0.0/icon-font.min.css">
  


    <link rel="stylesheet" href="../css/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonteawesome/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="../css/css/aos.css">

    <link rel="stylesheet" href="../css/css/style.css">
    
	<link rel="icon" type="image/png" href="../images/cartimages/icons/favicon.png"/>



	<link rel="stylesheet" type="text/css" href="../fontawesome/cartfonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="../fontawesone/cartfonts/linearicons-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">

	<link rel="stylesheet" type="text/css" href="../css/cartcss/util.css">
	<link rel="stylesheet" type="text/css" href="../css/cartcss/main.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  



	
	<!-- Header -->
	</head>
  <body>
  <?php 
  
 
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
   
      <div class="site-blocks-cover inner-page-cover" style="background-image: url(../images/images/blackgirlhair.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light mb-2 display-1">See Our Services!</h2>

              <p><a href="#" class="btn btn-black py-3 px-5">Book Now!</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>



	
	<!-- Shoping Cart -->

	
	<form class="bg0 p-t-75 p-b-85" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
					
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
								<?php
                        $product= select_allincart_ctr($id);
                        $i=0;
						$total1=0;

					
                        while($i<count($product)){
                  
                             
                            
                        ?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="<?php echo $product[$i]['product_image'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $product[$i]['product_title'];?></td>
									<td class="column-3"><?php echo $product[$i]['product_price'];?></td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" >
										<a href="../actions/remove_quantity.php?id=<?php echo $product[$i]['product_id'];?>"><i class="fs-16 zmdi zmdi-minus"></i></a>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?php echo $product[$i]['qty'];?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"> 
											<a  href='../actions/add_quantity.php?id=<?php echo $product[$i]['product_id']?>'> <i class="fs-16 zmdi zmdi-plus"  ></i> </a>
											</div>
											<a  href='../actions/remove_cart.php?id=<?php echo $product[$i]['product_id']?>'> <i class="fa fa-trash"></i></a>

										</div>
										<a  href='../actions/remove_cart.php?id=<?php echo $product[$i]['product_id']?>'> <i class="fa fa-trash"></i></a>

											
									</td>
									<td class="column-5"><?php echo  $product[$i]['product_price'] * $product[$i]['qty'];?></td>
								</tr>
								
					
				<?php
				 $total1+= ($product[$i]['product_price'] * $product[$i]['qty']) ; 
              $i++; 
                      
					 }
              ?>
			  <?php
                        $service= select_allinservicecart_ctr($id);
                        $i=0;
						$total2=0;
					
                        while($i<count($service)){
                  
                             
                            
                        ?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="<?php echo $service[$i]['service_image'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $service[$i]['service_title'];?></td>
									<td class="column-3"><?php echo $service[$i]['service_price'];?></td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m" >
										<a href="../actions/remove_servicequantity.php?id=<?php echo $service[$i]['service_id'];?>"><i class="fs-16 zmdi zmdi-minus"></i></a>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?php echo $service[$i]['qty'];?>">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"> 
											<a  href='../actions/add_servicequantity.php?id=<?php echo $service[$i]['service_id']?>'> <i class="fs-16 zmdi zmdi-plus"  ></i> </a>
											</div>
											
										</div>
										
										<a  href='../actions/remove_servicecart.php?id=<?php echo $service[$i]['service_id']?>'> <i class="fa fa-trash"></i></a>
	
											
									</td>
									
									<td class="column-5"><?php echo  $service[$i]['service_price'] * $service[$i]['qty'];?></td>
								</tr>
								
					
				<?php
				 $total2+= ($service[$i]['service_price'] * $service[$i]['qty']) ; 
              $i++; 
                      
					 }
              ?>
			 
								
							 	<!-- <tr class="table_row">
							// 		<td class="column-1">
							// 			<div class="how-itemcart1">
							// 				<img src="../images/cartimages/item-cart-05.jpg" alt="IMG">
							// 			</div>
							// 		</td>
							// 		<td class="column-2">Lightweight Jacket</td>
							// 		<td class="column-3">$ 16.00</td>
							// 		<td class="column-4">
							// 			<div class="wrap-num-product flex-w m-l-auto m-r-0">
							// 				<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
							// 					<i class="fs-16 zmdi zmdi-minus"></i>
							// 				</div>

							// 				<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product2" value="1">

							// 				<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
							// 					<i class="fs-16 zmdi zmdi-plus"></i>
							// 				</div>
							// 			</div>
							// 		</td>
							// 		<td class="column-5">$ 16.00</td>
							// 	</tr> -->
							 </table>

						</div>

					
					</div>
				</div>
				
		
				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								GHC <?php echo $total1 + $total2; ?>.00

								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Email:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
                                <?php echo $email ?>
								</p>
								
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>
							
							<div class="size-209 p-t-1" id="total">
								<span class="mtext-110 cl2">
								<input name="total" id="total" value="GHC <?php echo $total1 + $total2; ?>.00" required>

							</div>
						</div>

						<button  class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						<a href="confirmpayment.php">Proceed to Checkout </a>
						</button>
					</div>

				
				</div>
			</div>
		</div>
	</form>
		
	

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="../images/cartimages/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="../images/cartimages/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="../images/cartimages/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="../images/cartimages/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="../images/cartimages/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>


				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
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
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>

	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>

	<script src="../js/cartjs/main.js"></script>

</body>
</html>