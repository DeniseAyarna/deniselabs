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

class customer_class extends db_connection
{
	//--INSERT--//
	function insert_record_cls($a, $b ,$c ,$d ,$e, $f,$role){
		$sql= "INSERT INTO customer (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,user_role) VALUES ('$a','$b','$c','$d','$e','$f','$role')";
		return $this->db_query($sql);
	}

	
	//--SELECT--//
	function select_all_records_cls(){
		$sql= "SELECT *  FROM customer";
		return $this->db_fetch_all($sql);
	}

	

	//--UPDATE--//
function update_all_records_cls($id,$name,$number,$email,$city,$password,$country){
	$sql= "UPDATE customer set customer_name = '$name' customer_email= '$email' customer_pass='$password' customer_country= '$country' ,customer_city= '$city' customer_contact='$number' where customer_id ='$id' ";
	return $this->db_query($sql);
}
    
	//--DELETE--//
	function delete_all_records_cls($id){
		$sql= "DELETE FROM customer where customer_id = '$id' ";
		return $this->db_query($sql);
	

	}
	function select_one_contact_cls($email){

        // return array or false
			// return associative array or false
            return $this->db_fetch_one("SELECT * from customer where customer_email='$email'");
    }
}


?>