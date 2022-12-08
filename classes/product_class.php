<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class product_class extends db_connection

{
	//--INSERT--//
	function insert_record_cls($a){
		$sql= "INSERT INTO brands (brand_name) VALUES ('$a')";
		return $this->db_query($sql);
	}
    function insert_category_cls($a){
		$sql= "INSERT INTO categories (cat_name) VALUES ('$a')";
		return $this->db_query($sql);
	}
	function insert_product_cls($a,$b,$c,$d,$e,$f,$g){
		$sql= "INSERT INTO products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
		return $this->db_query($sql);
	}
	
	

	
	//--SELECT--//
	function select_all_records_cls(){
		$sql= "SELECT * FROM brands";
		return $this->db_fetch_all($sql);
	}
    function select_all_categories_cls(){
		$sql= "SELECT * FROM categories";
		return $this->db_fetch_all($sql);
	}
	function select_all_products_cls(){
		$sql= "SELECT * FROM products";
		return $this->db_fetch_all($sql);
	}


	

	//--UPDATE--//
function update_all_records_cls($id,$bname){
	$sql= "UPDATE brands set brand_name = '$bname'  where brand_id ='$id' ";
	return $this->db_query($sql);
}
function update_all_categories_cls($id,$cname){
	$sql= "UPDATE categories set cat_name = '$cname'  where cat_id ='$id' ";
	return $this->db_query($sql);
}
function update_all_products_cls($id,$productcat,$productbrand,$producttitle,$productprice,$productdesc,$fileDestination,$productkeyword){
	$sql= "UPDATE products set product_cat ='$productcat', product_brand= '$productbrand', product_title='$producttitle', product_price='$productprice', product_desc='$productdesc', product_image='$fileDestination' ,product_keywords = '$productkeyword'  where product_id ='$id' ";
	return $this->db_query($sql);
}
    
	//--DELETE--//
    function delete_all_records_cls($id){
		$sql= "DELETE FROM brands where brand_id = '$id' ";
		return $this->db_query($sql);
    }
	function delete_all_categories_cls($id){
		$sql= "DELETE FROM categories where cat_id = '$id' ";
		return $this->db_query($sql);
	

	}
	function delete_all_products_cls($id){
		$sql= "DELETE FROM products where product_id = '$id' ";
		return $this->db_query($sql);
	

	}

	

	function select_one_contact_cls($id){

        // return array or false
			// return associative array or false
            return $this->db_fetch_one("SELECT * from brands where brand_id='$id'");
        }

    
	function select_one_category_cls($id){

        // return array or false
			// return associative array or false
            return $this->db_fetch_one("SELECT * from categories where cat_id='$id'");
    }
function select_one_product_cls($id){

        // return array or false
			// return associative array or false
            return $this->db_fetch_one("SELECT * from products where product_id='$id'");
    }



function list_all_products_cls($title){

	// return array or false
		// return associative array or false
		return $this->db_fetch_one("SELECT * from products where (`product_title` like '".$title."%') ");
}


function select_by_category_cls($pid){
	// return associative array or false
	return $this->db_fetch_all("SELECT * from products  where product_cat = '$pid' ");
}






//SERVICES
//--INSERT--//
	
function insert_servicecategory_cls($a){
	$sql= "INSERT INTO servicecategories (scat_name) VALUES ('$a')";
	return $this->db_query($sql);
}
function insert_service_cls($a,$b,$c,$d,$e,$f){
	$sql= "INSERT INTO services (service_cat,service_title,service_price,service_desc,service_image,service_keywords) VALUES ('$a','$b','$c','$d','$e','$f')";
	return $this->db_query($sql);
}




//--SELECT--//

function select_all_servicecategories_cls(){
	$sql= "SELECT * FROM servicecategories";
	return $this->db_fetch_all($sql);
}
function select_all_services_cls(){
	$sql= "SELECT * FROM services";
	return $this->db_fetch_all($sql);
}




//--UPDATE--//

function update_all_servicecategories_cls($id,$sname){
$sql= "UPDATE servicecategories set scat_name = '$sname'  where scat_id ='$id' ";
return $this->db_query($sql);
}

function update_all_services_cls($id,$servicecat,$servicetitle,$serviceprice,$servicedesc,$fileDestination,$servicekeyword){
$sql= "UPDATE services set service_cat ='$servicecat', service_title='$servicetitle', service_price='$serviceprice', service_desc='$servicedesc', service_image='$fileDestination' ,service_keywords = '$servicekeyword'  where service_id ='$id' ";
return $this->db_query($sql);
}

//--DELETE--//

function delete_all_servicecategories_cls($id){
	$sql= "DELETE FROM servicecategories where scat_id = '$id' ";
	return $this->db_query($sql);


}

function delete_all_services_cls($id){
	$sql= "DELETE FROM services where service_id = '$id' ";
	return $this->db_query($sql);


}





function select_one_servicecategory_cls($id){

	// return array or false
		// return associative array or false
		return $this->db_fetch_one("SELECT * from servicecategories where scat_id='$id'");
}
function select_one_service_cls($id){

	// return array or false
		// return associative array or false
		return $this->db_fetch_one("SELECT * from services where service_id='$id'");
}



function list_all_services_cls($title){

// return array or false
	// return associative array or false
	return $this->db_fetch_one("SELECT * from services where (`service_title` like '".$title."%') ");
}


function select_by_servicecategory_cls($pid){
// return associative array or false
return $this->db_fetch_all("SELECT * from services  where service_cat = '$pid' ");
}


function count_cart_cls($id){
    $sql="Select sum(qty) as `count` from cart where c_id='$id' ";
    return $this->db_fetch_one($sql);
}

function count_servicecart_cls($id){
    $sql="Select sum(qty) as `count` from servicecart where c_id='$id' ";
    return $this->db_fetch_one($sql);
}
function show_userbookings_cls($id){
    $sql= "select DISTINCT bookings.customer_id, bookings.booking_date , orders.order_id, bookingdetails.service_id,bookingdetails.qty,services.service_title FROM bookings,orders,bookingdetails,services where bookings.customer_id=orders.customer_id and orders.order_id=bookingdetails.booking_id and bookingdetails.service_id=services.service_id and bookings.customer_id='$id';";
   return $this->db_fetch_all($sql);

}
function show_bookings_cls(){
    $sql= "select DISTINCT bookings.customer_id, bookings.booking_date , orders.order_id, bookingdetails.service_id,bookingdetails.qty,services.service_title FROM bookings,orders,bookingdetails,services where bookings.customer_id=orders.customer_id and orders.order_id=bookingdetails.booking_id and bookingdetails.service_id=services.service_id ";
   return $this->db_fetch_all($sql);

}
function show_orders_cls(){
$sql="select orders.order_id,orders.customer_id,orders.invoice_no,orders.order_date,orderdetails.product_id,orderdetails.qty,customer.customer_name,products.product_title from orders,orderdetails,customer,products where orders.order_id=orderdetails.order_id and orders.customer_id=customer.customer_id and orderdetails.product_id=products.product_id";
return $this->db_fetch_all($sql);
}

}
?>



