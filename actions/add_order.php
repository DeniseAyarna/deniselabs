<?php

require('../controllers/cart_controllers.php');


session_start();
  if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'])){
    header('location:../login/login.php');
  }
  
 
?>
<?php

if(isset($_POST['id'])){
    // get form values
    $cid=$_POST['id'];
    $order_date=date("Y/m/d");
    $order_stat='pending';
    $invoice=mt_rand();
    $total=$_POST['total'];
    // insert a new order for the logged in customer
    $result=addorder_ctr($cid, $invoice, $order_date, $order_stat);
    if($result===TRUE){ 
$result1=get_order_ctr($invoice,$cid);
$result2=select_allincart_ctr($cid);

$i=0;
while($i<count($result2)){
  insert_into_orderdetails_ctr($result1['order_id'],$result2[$i]['p_id'],$result2[$i]['qty']);
  $i++;
}
$result3=select_allinservicecart_ctr($cid);

$j=0;
while($j<count($result3)){
  insert_into_bookingdetails_ctr($result1['order_id'],$result3[$j]['p_id'],$result3[$j]['qty']);
  $j++;
}
 echo $cid ;
insert_into_payment_cls($total,$cid,$result1['order_id'],$order_date);
delete_from_cart2_ctr($cid);
delete_from_servicecart2_ctr($cid);
         header('location:../view/thankyou.php');
    }else{
    echo "fail";
}
}
?>