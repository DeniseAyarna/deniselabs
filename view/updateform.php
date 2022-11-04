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


if(isset($_GET['updateid'])){
	$contact = select_one_contact_ctr($_GET['updateid']);
}

 ?>
	<h1>Update</h1>

<div class="container">

     <form method="POST"  action="../actions/update.php">  
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Name" name="pname" value="<?php echo $contact['pname'] ?>">
        </div>

        <div class="form-group">
            <input class="form-control" placeholder="number" name="pphoned" value="<?php echo $contact['pphoned'] ?>">
        </div>
        <input class="form-control" type="hidden"  name="id" value="<?php echo $contact['pid'] ?>">


        <input type="submit" name="updateButton">
    </form>
</div>
</body>
</html>
