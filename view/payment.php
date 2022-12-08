
<?php
session_start();
if(empty($_SESSION['customer_name']) and empty($_SESSION['customer_email']) and empty($_SESSION['customer_id'])){
	header('location:../login/login.php');
}

require('../controllers/cart_controllers.php');

$id = $_SESSION['customer_id'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action ="" method= "POST" >
        <input type= "email" name="email" id="email" placeholder="Email" required>
        <input type= "tel" name="amount" id="amount" placeholder="Amount" value="<?php echo  $_GET['total'];?> " required>
        <button type= "button" onclick="payWithPaystack()"> Pay </button>
  
  </form>
</body>
</html>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script>
      //const paymentForm = document.getElementById('paymentForm');
      //paymentForm.addEventListener("submit", payWithPaystack, false);
      function payWithPaystack() {
        event.preventDefault();

        let handler = PaystackPop.setup({
          key: 'pk_test_54d99e75b326199ad491f3a7d8ca263993f9dcc1', // Replace with your public key
          email: document.getElementById("email").value,
          amount: document.getElementById("amount").value * 100,
          ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
          currency: 'GHS',
          // label: "Optional string that replaces customer email"
          onClose: function(){
            alert('Window closed.');
          },
          callback: function(response){
            
            let message = 'Payment complete! Reference: ' + response.reference;
            alert(message);

            $.ajax({
    url: '../actions/process_paystack.php?reference='+ response.reference,
    method: 'get',
    success: function (response) {
      // the transaction status is in response.data.status
     window.location.href='index.php';
    }
  });

          }
        });
        
        handler.openIframe();
      }
    </script> 

