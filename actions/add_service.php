<?php

require('../controllers/product_controller.php');

//collecting form data 
if(isset($_POST['save'])){
   
    $servicecat = $_POST['service_cat'];
   
    $servicetitle = $_POST['service_title'];
    $serviceprice = $_POST['service_price'];
    $servicedesc = $_POST['service_desc'];
    //$serviceimage = $_POST['service_image'];
    $servicekey = $_POST['service_keywords'];

    $file = $_FILES["service_image"];
    $fileName = $_FILES['service_image']['name'];
    $fileTmpName = $_FILES['service_image']['tmp_name'];
    $fileSize = $_FILES['service_image']['size'];
    $fileError = $_FILES['service_image']['error'];
    $fileType = $_FILES['service_image']['type'];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // enforcing file compatibility
    $allowed = array("jpg","jpeg","png","pdf");

    // checking the file type
    if(in_array($fileActualExt, $allowed)){
        // checking if theres an error in uploading file
        if($fileError === 0){
            // checking to see if the filesize if good
            if($fileSize < 5000000){
                // creates microseconds based on our current time in microseconds. so that the random number is not the same as something we have already uploaded
                $fileNameNew = uniqid('',true).".".$fileActualExt;

                // Directing the file to the destination in our code we want it
                $fileDestination = '../images/services/'.$fileNameNew;

                // moving file to the categories section of images
                $move = move_uploaded_file($fileTmpName, $fileDestination);
                // Tell us that our upload has been successful;
                // header("location: ../Admin/Category.php?uploadsuccess");
            }else{
                echo "Your file is too big";
            }
        }else{
            echo "You cannot upload this type of files";
        }
    }else{
        echo "You cannot upload file of this type";
    }
    
   

    $result = insert_service_ctr($servicecat,$servicetitle,$serviceprice,$servicedesc,$fileDestination,$servicekey);

    if($result){
        header("Location: ../admin/service.php");
    } else {
        echo "fail";
    }
}



// //updating data

// if (isset($_GET['updateButton'])){
//     $id=$_GET['updateid'];
//     $servicecat = $_POST['service_cat'];
//     $servicebrand = $_POST['service_brand'];
//     $servicetitle = $_POST['service_title'];
//     $serviceprice = $_POST['service_price'];
//     $servicedesc = $_POST['service_desc'];
  
//     $servicekey = $_POST['service_keywords'];

//     $file = $_FILES["service_image"];
//     $fileName = $_FILES['service_image']['name'];
//     $fileTmpName = $_FILES['service_image']['tmp_name'];
//     $fileSize = $_FILES['service_image']['size'];
//     $fileError = $_FILES['service_image']['error'];
//     $fileType = $_FILES['service_image']['type'];

//     $fileExt = explode(".", $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     // enforcing file compatibility
//     $allowed = array("jpg","jpeg","png","pdf");

//     // checking the file type
//     if(in_array($fileActualExt, $allowed)){
//         // checking if theres an error in uploading file
//         if($fileError === 0){
//             // checking to see if the filesize if good
//             if($fileSize < 5000000){
//                 // creates microseconds based on our current time in microseconds. so that the random number is not the same as something we have already uploaded
//                 $fileNameNew = uniqid('',true).".".$fileActualExt;

//                 // Directing the file to the destination in our code we want it
//                 $fileDestination = '../images/service/'.$fileNameNew;

//                 // moving file to the categories section of images
//                 $move = move_uploaded_file($fileTmpName, $fileDestination);
//                 // Tell us that our upload has been successful;
//                 // header("location: ../Admin/Category.php?uploadsuccess");
//             }else{
//                 echo "Your file is too big";
//             }
//         }else{
//             echo "You cannot upload this type of files";
//         }
//     }else{
//         echo "You cannot upload file of this type";
//     }
    
    
    

//     $result= update_all_services_ctr($id,$servicecat,$servicebrand,$servicetitle,$serviceprice,$servicedesc,$fileDestination,$servicekeyword);
//     if($result==true){
//         echo "Update sucessful";
//         header("Location: ../admin/service.php");
//     }else{
//         echo "fail";
//     }
// }
?>