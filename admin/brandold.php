
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require('../controllers/product_controller.php');
        $result = select_all_records_ctr();
        
    ?>
    <form action ="../actions/add_brand.php" method= "POST">
        <input type= "text" name="bname" id="bname" placeholder="Brand Name">
        
        <button type= "submit" name="save"> Add</button>
    </form>
    <h1>BRANDS</h1>

<table id="brands">
  <tr>
    <th scope="col">id</th>
    <th scope ="col">Name</th>
    
  </tr>
  
    <?php 
   
        foreach($result as $record ){
            {
                $id = $record['brand_id'];
                $bname = $record['brand_name'];
               
                echo '<tr><th scope="row">'
    .$id.' </th>
    <td>'.$bname.'</td>
   
    <td>
                        <button class="btn btn-primary"><a href="../admin/updatebrandform.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-primary"><a href="../actions/delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
                        </td>
  </tr>';};
            }



    ?>
</body>
</html>

<!-- //<li><a class="" href="actions/add_brand.php">Add Brand</a></li> -->