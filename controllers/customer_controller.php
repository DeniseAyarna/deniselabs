<?php
//connect to the user account class
require('../classes/customer_class.php');

//--INSERT--//
function insert_record_ctr($a, $b,$c ,$d, $e, $f, $role){
    // Creates an instance of the general class and appends it to $item
    $item = new customer_class();
    // Calling insert record method in the general class and returns true or false
    return $item->insert_record_cls($a, $b,$c ,$d, $e, $f,$role);
}

//--SELECT--//
function select_all_records_ctr(){
    // Creates an instance of the general class and appends it to $item
    $item = new customer_class();
    // Calling select all records method in the general class and returns true or false
    return $item->select_all_records_cls();
}
//--UPDATE--//
function update_all_records_ctr($id,$name,$email,$city,$password,$number,$country,$role){
    // Creates an instance of the general class and appends it to $item
    $item = new customer_class();
    // Calling select all records method in the general class and returns true or false
    return $item->update_all_records_cls($id,$name,$email,$city,$password,$number,$country,$role);
}

//--DELETE--//
function delete_all_records_ctr($id){
    // Creates an instance of the general class and appends it to $item
    $item = new customer_class();
    // Calling select all records method in the general class and returns true or false
    return $item->delete_all_records_cls($id);
}

function select_one_contact_ctr($id){
// Creates an instance of the general class and appends it to $item
$item = new customer_class();
// Calling select all records method in the general class and returns true or false
return $item->select_one_contact_cls($id);
}
    
?>