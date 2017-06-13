<?php
$access_token = "EAABZBz1EPLBwBAMExZB4lV5mzTNtpQESrQc6Wc29nTDvTkrK4uhAeSQAZCTgiTHdfZCmCClmoJ5tv9gW98AhPJKs3OQlG0rcLRfBai1NrFfJ3oMee8Yoem3K8hem4ZADZCuZBByq6PZC4i1flVEAzzbcLYeL4k558ghdqnE2lwBEJQZDZD";
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
