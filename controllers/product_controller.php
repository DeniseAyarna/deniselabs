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
    
?>