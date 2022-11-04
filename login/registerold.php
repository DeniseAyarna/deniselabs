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
        require('../controllers/customer_controller.php');

        $result = select_all_records_ctr();
        
    ?>
    <form action ="../actions/registerprocess.php" method= "POST">
        <input type= "text" name="customer_name" id="customer_name" placeholder="type your name" required >
        <input type= "EMAIL" name="customer_email" id="customer_email" placeholder="type your Email" required >
        <input type= "password" name="customer_pass" id="customer_pass" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        <input type= "text" name="customer_country" id="customer_country" placeholder="country" required>
        <input type= "text" name="customer_city" id="customer_city" placeholder="city" required >
        <input type= "tel" name="customer_contact" id="customer_contact" placeholder="type your phonenumber" required>
       
        <button type= "submit" name="save"> Register</button>
    </form>
  

</body>
</html>
  