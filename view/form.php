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
        require('../controllers/general_controller.php');
        $result = select_all_records_ctr();
        
    ?>
    <form action ="../actions/process_save.php" method= "POST">
        <input type= "text" name="fname" id="fname" placeholder="type your name">
        <input type= "tel" name="pname" id="pname" placeholder="type your phonenumber" >
        <button type= "submit" name="save"> Submit</button>
    </form>
    <h1>Phonebook</h1>

<table id="customers">
  <tr>
    <th scope="col">id</th>
    <th scope ="col">Name</th>
    <th scope="col">Number</th>
  </tr>
  
    <?php 
   
        foreach($result as $record ){
            {
                $id = $record['pid'];
                $name = $record['pname'];
                $number = $record['pphoned'];

                echo '<tr><th scope="row">'
    .$id.' </th>
    <td>'.$name.'</td>
    <td>'.$number.'</td>
    <td>
                        <button class="btn btn-primary"><a href="../view/updateform.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-primary"><a href="../actions/delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
                        </td>
  </tr>';};
            }



    ?>
</body>
</html>