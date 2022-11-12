<?php
//connect to the user account class
require('../classes/product_class.php');

//--INSERT--//
function insert_record_ctr($a){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_record_cls($a);
}
function insert_category_ctr($a){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_category_cls($a);
}
function insert_product_ctr($a,$b,$c,$d,$e,$f,$g){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_product_cls($a,$b,$c,$d,$e,$f,$g);
}

function insert_into_cart_ctr($a,$b,$c,$d){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_into_cart_cls($a,$b,$c,$d);
}


//--SELECT--//
function select_all_records_ctr(){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_all_records_cls();
}
function select_all_categories_ctr(){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_all_categories_cls();
}
function select_all_products_ctr(){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_all_products_cls();
}

//--UPDATE--//
function update_all_records_ctr($id,$bname){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->update_all_records_cls($id,$bname);
}
function update_all_categories_ctr($id,$cname){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->update_all_categories_cls($id,$cname);
}
function update_all_products_ctr($id,$productcat,$productbrand,$producttitle,$productprice,$productdesc,$fileDestinaton,$productkeyword){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->update_all_products_cls($id,$productcat,$productbrand,$producttitle,$productprice,$productdesc,$fileDestinaton,$productkeyword);
}

//--DELETE--//
function delete_all_records_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->delete_all_records_cls($id);
}
function delete_all_categories_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->delete_all_categories_cls($id);
}
function delete_all_products_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->delete_all_products_cls($id);
}

//--SELECTONE--//
function select_one_contact_ctr($id){
// Creates an instance of the general class and appends it to $item
$item = new product_class();
// Calling select all records method in the general class and returns true or false
return $item->select_one_contact_cls($id);
}

function select_one_category_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_one_category_cls($id);
 }
    function select_one_product_ctr($id){
        // Creates an instance of the general class and appends it to $item
        $item = new product_class();
        // Calling select all records method in the general class and returns true or false
        return $item->select_one_product_cls($id);
 }

 function list_all_products_ctr($title){
    // Creates an instance of the general class and appends it to $item
    $item = new product_class();
    // Calling select all records method in the general class and returns true or false
    return $item->list_all_products_cls($title);
}
?>