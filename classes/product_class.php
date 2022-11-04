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


	
	//--SELECT--//
	function select_all_records_cls(){
		$sql= "SELECT * FROM brands";
		return $this->db_fetch_all($sql);
	}
    function select_all_categories_cls(){
		$sql= "SELECT * FROM categories";
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
    
	//--DELETE--//
    function delete_all_records_cls($id){
		$sql= "DELETE FROM brands where brand_id = '$id' ";
		return $this->db_query($sql);
    }
	function delete_all_categories_cls($id){
		$sql= "DELETE FROM categories where cat_id = '$id' ";
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

}
?>