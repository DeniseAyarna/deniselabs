<?php
//connect to database class
require("../settings/db_class.php");


class cart_class extends db_connection


//INSERT 

{function insert_into_cart_cls($a,$b,$c,$d){
    $sql= "Insert into cart( p_id,ip_add,c_id,qty) select '$a','$b','$c','$d' from dual WHERE NOT EXISTS(Select * from cart where `p_id`='$a' and `c_id`='$c')";
    $this->db_query($sql);
    
    if (mysqli_affected_rows($this->db)==0){
        $sql1="UPDATE `cart` set `qty`=`qty`+'$d' where `p_id`='$a' and `c_id`='$c'";
        return $this->db_query($sql1);
    } else{
        return $this->db_query($sql);
    }}


function insert_into_cart2_cls($id,$ip_address,$qty){
    return $this->db_query("insert into cart(p_id, ip_add, qty) values('$id', '$ip_address', '$qty')");

}


//SELECT

function select_onepersons_cart_cls($id){

	
		return $this->db_fetch_one("SELECT * from cart where c_id='$id'");
}

function select_allincart_cls($cid){

    return $this->db_fetch_all("select * from cart inner join products on  p_id = product_id where c_id = '$cid'  ");
}

function select_product_cart_cls($id){

	
		return $this->db_fetch_all("SELECT * from cart where p_id='$id'");
}

function select_quantity_cls($id){

    return $this->db_fetch_all("select * from cart where p_id='$id'");

}
function check_total_cls($id,$customerip){
    return $this->db_fetch_all("select SUM(qty * product_price) as total from cart inner join products on  p_id = product_id where c_id = '$id' or ip_add = '$customerip'");
}


//UPDATE 
function add_quantity_cls($id, $customerid){

    return $this->db_query("update cart set qty=qty +1 where p_id = '$id' and c_id='$customerid'");

}

function deduct_quantity_cls($id, $customerid){
    return $this->db_query("update cart set qty= qty-1 where p_id='$id' and c_id='$customerid'");
}



//DELETE
function delete_from_cart_cls($id){
	$sql= "DELETE FROM cart where p_id = '$id' ";
	return $this->db_query($sql);


}

function delete_from_cart2_cls($id){
	$sql= "DELETE FROM cart where c_id = '$id' ";
	return $this->db_query($sql);


}

//SERVICE CART
//INSERT 
function insert_into_servicecart_cls($a,$b,$c,$d){
    $sql= "Insert into servicecart( p_id,ip_add,c_id,qty) select '$a','$b','$c','$d' from dual WHERE NOT EXISTS(Select * from servicecart where `p_id`='$a' and `c_id`='$c')";
    $this->db_query($sql);
    
    if (mysqli_affected_rows($this->db)==0){
        $sql1="UPDATE `cart` set `qty`=`qty`+'$d' where `p_id`='$a' and `c_id`='$c'";
        return $this->db_query($sql1);
    } else{
        return $this->db_query($sql);
    }}


function insert_into_servicecart2_cls($id,$ip_address,$qty){
    return $this->db_query("insert into servicecart(p_id, ip_add, qty) values('$id', '$ip_address', '$qty')");

}


//SELECT

function select_onepersons_servicecart_cls($id){

	
		return $this->db_fetch_one("SELECT * from servicecart where c_id='$id'");
}

function select_allinservicecart_cls($cid){

    return $this->db_fetch_all("select * from servicecart inner join services on  p_id = service_id where c_id = '$cid'  ");
}

function select_service_cart_cls($id){

	
		return $this->db_fetch_all("SELECT * from servicecart where p_id='$id'");
}

function select_servicequantity_cls($id){

    return $this->db_fetch_all("select * from servicecart where p_id='$id'");

}
function check_servicetotal_cls($id,$customerip){
    return $this->db_fetch_all("select SUM(qty * service_price) as total from servicecart inner join services on  p_id = service_id where c_id = '$id' or ip_add = '$customerip'");
}


//UPDATE 
function add_servicequantity_cls($id, $customerid){

    return $this->db_query("update servicecart set qty=qty +1 where p_id = '$id' and c_id='$customerid'");

}

function deduct_servicequantity_cls($id, $customerid){
    return $this->db_query("update servicecart set qty= qty-1 where p_id='$id' and c_id='$customerid'");
}



//DELETE
function delete_from_servicecart_cls($id){
	$sql= "DELETE FROM servicecart where p_id = '$id' ";
	return $this->db_query($sql);


}

function count_cart_cls($id){
    $sql="Select count(*) from cart where c_id='$id' ";
    return $this->db_query($sql);
}

function count_servicecart_cls($id){
    $sql="Select count(*) from servicecart where c_id='$id' ";
    return $this->db_query($sql);
}

function delete_from_servicecart2_cls($id){
	$sql= "DELETE FROM servicecart where c_id = '$id' ";
	return $this->db_query($sql);
}

//orders
function addorder_cls($cid, $inv_no, $order_date, $order_stat){
    $sql = "INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$cid','$inv_no','$order_date','$order_stat')";
    return $this->db_query($sql);
}


function get_order_cls($invoice,$c_id){

	
    return $this->db_fetch_one("SELECT * from orders where customer_id='$c_id'  and invoice_no ='$invoice'");
}

// function get_order_cls($invoice,$c_id){
//     $sql= "Select * from `orders` where customer_id='$c_id'  and invoice_no ='$invoice' ";
//     $this->db_fetch_one($sql);


// }


function insert_into_orderdetails_cls($a,$b,$c){
    $sql= "Insert into orderdetails( order_id,product_id,qty) Values ('$a','$b','$c')";
   return $this->db_query($sql);


}

//bookings

 function addbooking_cls($cid,  $booking_date){
   $sql = "INSERT INTO `bookings`(`customer_id`,  `booking_date` ) VALUES ('$cid','$booking_date')";
    return $this->db_query($sql);
 }

function insert_into_bookingdetails_cls($a,$b,$c){
    $sql= "Insert into bookingdetails( booking_id,service_id,qty) Values ('$a','$b','$c')";
   return $this->db_query($sql);


}

//payment
function insert_into_payment_cls($a,$b,$c,$d){
    $sql= "Insert into payment(amt,customer_id,order_id,currency,payment_date) Values ('$a','$b','$c','GHS','$d')";
   return $this->db_query($sql);


}

function show_userbookings_cls($id){
    $sql= "select DISTINCT bookings.customer_id, bookings.booking_date , orders.order_id, bookingdetails.service_id,bookingdetails.qty,services.service_title FROM bookings,orders,bookingdetails,services where bookings.customer_id=orders.customer_id and orders.order_id=bookingdetails.booking_id and bookingdetails.service_id=services.service_id and bookings.customer_id='$id';";
   return $this->db_fetch_all($sql);

}
function show_orders_cls(){
$sql="select orders.order_id,orders.customer_id,orders.invoice_no,orders.order_date,orderdetails.product_id,orderdetails.qty,customer.customer_name,products.product_title from orders,orderdetails,customer,products where orders.order_id=orderdetails.order_id and orders.customer_id=customer.customer_id and orderdetails.product_id=products.product_id";
return $this->db_fetch_all($sql);
}

}



?>