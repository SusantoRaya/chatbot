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
    
    if($message == "hendi"){
            $message_to_reply = "Adelin";
            $jsonData = formatText($sender,$message_to_reply);
    }
    else if($message == "slider"){
            $jsonData = getSlider($sender);
    }else{
            $message_to_reply = "test send message reply from bot";
            $jsonData = formatText($sender,$message_to_reply);
    }
    
    $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;
    
    
                
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    
    $result = curl_exec($ch);
    curl_close($ch);
    
}


function formatText($sender,$message){
    $jsonData = '{
    
                    "recipient":{
                        "id":"'.$sender.'"
                    },
                    "message":{
                          "text":"'.$message.'"
                    }
    
                }';
                
    return $jsonData;
}

/*function getSlider($sender){
    
    $items = array();
    for($i=0;$i<5;$i++){
        $items[] = array(
                'title'=>"Title ".$i,
                'item_url'=>"http://custom.co.id/",
                'image_url'=>"http://custom.co.id/images/home/sablon-baju.jpg",
                'subtitle'=>"this is sub",
                'buttons'=>array(
                        array(
                            'type'=>'web_url',
                            'url'=>"http://custom.co.id/",
                            'title'=>"link to coid"
                        ),
                        array(
                            'type'=>"postback",
                            'payload'=>"Thanks Button",
                            'title'=>"extra button"
                        )
                ),
            
        );
    }
    
    $itemJson = json_encode($items);
     
    $output = '{
                    "attachment":{
                            "type":"template",
                            "payload":{
                                    "template_type":"generic",
                                    "elements":'.$itemJson.'
                            }
                    }
    
            }';
            
    $jsonData = '{"recipient":{ "id":"'.$sender.'" },
                  "message":'.$output'
                }';
                
                
    return $jsonData;
}
*/

?>
