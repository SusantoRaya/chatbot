<?php
$access_token = "EAAEXKID1wxIBABMyFxZB4WJGyz0NifsFQpCoOZCPqxORZAz7Nusbel3OS7IZCjyIqPrA8Eyl6ZCsdkPSfZAFyEeXONSqayAQEF6P6TWBCjWuyJNs0M3ZCUxDMF4iNbcSf3IL02UZCZBqoZCnQsYbVaiczqIhm20ZCnC9oO7kUfZARuTRayw1HYoMPJQG";
$verify_token = "fb_mv_bot";
$hub_verify_token = null;
if(isset($_REQUEST['hub_challenge'])) {
 $challenge = $_REQUEST['hub_challenge'];
 $hub_verify_token = $_REQUEST['hub_verify_token'];
}
if ($hub_verify_token === $verify_token) {
 echo $challenge;
}

?>
