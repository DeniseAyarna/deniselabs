<?php
//connect to the user account class
require('../classes/cart_class.php');

//INSERT
function insert_into_cart_ctr($a,$b,$c,$d){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_into_cart_cls($a,$b,$c,$d);
}
function insert_into_cart2_ctr($id,$ip_address,$qty){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_into_cart2_cls($id,$ip_address,$qty);
}
//SELECT 
function select_onepersons_cart_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_onepersons_cart_cls($id);
}

function select_allincart_ctr($cid){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_allincart_cls($cid);
}
function select_product_cart_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_product_cart_cls($id);
}
function  select_quantity_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> select_quantity_cls($id);
}
function check_total_ctr($id,$customerip){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> check_total_cls($id,$customerip);
}

//UPDATE 
function  add_quantity_ctr($id, $customerid){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> add_quantity_cls($id, $customerid);
}

function  deduct_quantity_ctr($id, $customerid){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> deduct_quantity_cls($id, $customerid);
}

//DELETE 
function delete_from_cart_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> delete_from_cart_cls($id);
}

//servicecart
//INSERT
function insert_into_servicecart_ctr($a,$b,$c,$d){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_into_servicecart_cls($a,$b,$c,$d);
}
function insert_into_servicecart2_ctr($id,$ip_address,$qty){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_into_servicecart2_cls($id,$ip_address,$qty);
}
//SELECT 
function select_onepersons_servicecart_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_onepersons_servicecart_cls($id);
}

function select_allinservicecart_ctr($cid){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_allinservicecart_cls($cid);
}
function select_service_cart_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_service_cart_cls($id);
}
function  select_servicequantity_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> select_servicequantity_cls($id);
}
function check_servicetotal_ctr($id,$customerip){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> check_servicetotal_cls($id,$customerip);
}

//UPDATE 
function  add_servicequantity_ctr($id, $customerid){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> add_servicequantity_cls($id, $customerid);
}

function  deduct_servicequantity_ctr($id, $customerid){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> deduct_servicequantity_cls($id, $customerid);
}

//DELETE 
function delete_from_servicecart_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> delete_from_servicecart_cls($id);
}

function count_servicecart_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> count_servicecart_cls($id);
}


//orders 
function addorder_ctr($cid, $inv_no, $order_date, $order_stat){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> addorder_cls($cid, $inv_no, $order_date, $order_stat);
}
function addbooking_ctr($cid,  $booking_date){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> addbooking_cls($cid, $booking_date);
}
function get_order_ctr($invoice,$c_id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> get_order_cls($invoice,$c_id);
}

function insert_into_orderdetails_ctr($a,$b,$c){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> insert_into_orderdetails_cls($a,$b,$c);
}
//bookings
function insert_into_bookingdetails_ctr($a,$b,$c){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> insert_into_bookingdetails_cls($a,$b,$c);
}

function insert_into_payment_cls($a,$b,$c,$d){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> insert_into_payment_cls($a,$b,$c,$d);
}

function  delete_from_servicecart2_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item-> delete_from_servicecart2_cls($id);
}

function  delete_from_cart2_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->  delete_from_cart2_cls($id);
}

function  show_userbookings_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new cart_class();
    // Calling select all records method in the general class and returns true or false
    return $item->  show_userbookings_cls($id);
}

?>