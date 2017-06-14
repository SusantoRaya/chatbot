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


$input = json_decode(file_get_contents('php://input'),true);

$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = isset($input['entry'][0]['messaging'][0]['message']['text'])? $input['entry'][0]['messaging'][0]['message']['text'] : '';


if($message){
    $message_to_reply = "test send message reply from bot";
    
    $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;
    
    $jsonData = '{
    
                    "recipient":{
                        "id":"'.$sender.'"
                    },
                    "message":{
                          "text":"'.$message_to_reply.'"
                    }
    
                }';
                
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    
    $result = curl_exec($ch);
    curl_close($ch);
    
}
?>
