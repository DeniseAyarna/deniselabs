<?php
//connect to database class
require("../settings/db_class.php");


class cart_class extends db_connection{


//INSERT 
function insert_into_cart_cls($a,$b,$c,$d){
    $sql= "INSERT INTO cart (p_id,ip_add,c_id,qty) VALUES ('$a','$b','$c','$d')";
    return $this->db_query($sql);
}

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

function deduct_quantity_cls($id, $customerip ,$qty){
    return $this->db_query("update cart set qty='qty-1' where p_id='$id' and ip_add= '$customerip' and qty='$qty'");
}



//DELETE

}

     ?>