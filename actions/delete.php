
<?php
require('../controllers/general_controller.php');

//deleting data from form
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];


    $result = delete_all_records_ctr($id);
    if($result){
        header("Location: ../view/form.php");
    } else {
        echo "fail";
    }
    
}
?>
