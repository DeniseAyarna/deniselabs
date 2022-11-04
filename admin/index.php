<?php
session_start();
if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'] and $_SESSION['customer_role']!=1) ){
 header("location:../index.php");
 exit;
}
?>
<div class="topnav">
  <a class="active" 
   href="../../actions/logoutprocess.php">Logout</a>

  <a href="brand.php">Brands</a>
  <a href="category.php">categories</a>
  <a href="products.php">Products</a>
</div>
<!-- <li><a class="" href="brand.php">Brands</a> </li>
<li><a  class="" href="category.php">categories</a></li>
<li><a class="" href="products.php">Products</a></li>  -->