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

//DELETE 
?>