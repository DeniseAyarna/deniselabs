<?php
//connect to the user account class
require('../classes/product_class.php');


function insert_into_cart_cls($a,$b,$c,$d){
    $sql= "INSERT INTO cart (p_id,ip_add,c_id,qty) VALUES ('$a','$b','$c','$d')";
    return $this->db_query($sql);
}


?>