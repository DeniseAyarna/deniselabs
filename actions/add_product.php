<?php

require('../controllers/product_controller.php');

//collecting form data 
if(isset($_POST['save'])){
   
    $productcat = $_POST['product_cat'];
    $productbrand = $_POST['product_brand'];
    $producttitle = $_POST['product_title'];
    $productprice = $_POST['product_price'];
    $productdesc = $_POST['product_desc'];
    //$productimage = $_POST['product_image'];
    $productkey = $_POST['product_keywords'];

    $file = $_FILES["product_image"];
    $fileName = $_FILES['product_image']['name'];
    $fileTmpName = $_FILES['product_image']['tmp_name'];
    $fileSize = $_FILES['product_image']['size'];
    $fileError = $_FILES['product_image']['error'];
    $fileType = $_FILES['product_image']['type'];

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
                $fileDestination = '../images/product/'.$fileNameNew;

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
    
   

    $result = insert_product_ctr($productcat,$productbrand,$producttitle,$productprice,$productdesc,$fileDestination,$productkey);

    if($result){
        header("Location: ../admin/product.php");
    } else {
        echo "fail";
    }
}



// //updating data

// if (isset($_GET['updateButton'])){
//     $id=$_GET['updateid'];
//     $productcat = $_POST['product_cat'];
//     $productbrand = $_POST['product_brand'];
//     $producttitle = $_POST['product_title'];
//     $productprice = $_POST['product_price'];
//     $productdesc = $_POST['product_desc'];
  
//     $productkey = $_POST['product_keywords'];

//     $file = $_FILES["product_image"];
//     $fileName = $_FILES['product_image']['name'];
//     $fileTmpName = $_FILES['product_image']['tmp_name'];
//     $fileSize = $_FILES['product_image']['size'];
//     $fileError = $_FILES['product_image']['error'];
//     $fileType = $_FILES['product_image']['type'];

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
//                 $fileDestination = '../images/product/'.$fileNameNew;

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
    
    
    

//     $result= update_all_products_ctr($id,$productcat,$productbrand,$producttitle,$productprice,$productdesc,$fileDestination,$productkeyword);
//     if($result==true){
//         echo "Update sucessful";
//         header("Location: ../admin/product.php");
//     }else{
//         echo "fail";
//     }
// }
?>