<?php
//get reference number 
$theRef = $_GET['reference'];

$curl = curl_init();
  
curl_setopt_array($curl, array(

  CURLOPT_URL => "https://api.paystack.co/transaction/verify/:.$theRef",

  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(

    "Authorization: Bearer sk_test_d6a40cfc215afa3a1188cf2525f91974f81a1b5e",
    "Cache-Control: no-cache",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
