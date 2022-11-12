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
		return $this->db_fetch_one("select * from products where (`product_title` like '".$title."%') ");
}

}

?>