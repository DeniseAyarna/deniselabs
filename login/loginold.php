<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
        
        <form action ="../actions/loginprocess.php" method= "POST">
        <input type= "text" name="customer_email" id="customer_email" placeholder="Email">
        <input type= "password" name="customer_password" id="customer_pass" placeholder="Password" > 
        <button type= "submit" name="save">Login</button>
        <br>
    <?php
    session_start();
    if(!empty($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    
  

</body>
</html>
  