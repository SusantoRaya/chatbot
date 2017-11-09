<?php
$access_token = "EAAEdVUvgTwwBAMq2qUDZBVTZBITiIQNfetlgbjbYZC9kFl8UN9hsCTrMZCkjhmFT0PgieshVCZBoKrEfRiotlCGOCZCM7oKLpRWBgTCrE3hhqPboZBpS2C0Wo2sPGCCs5SfY6McCZCm76FBx8QqWZBhziYBARjZB5v6d3Gz15DLxB78wZDZD";
//ph
// callback url
//https://polar-stream-34335.herokuapp.com/
//https://github.com/SusantoRaya/chatbot.git
//facebook : grabtruk@gmail.com
//$access_token = "EAABZBz1EPLBwBAPwkU3jdGcz4XlZB8hJ52D9WGRE6aBt1dAuoY1BUuCH4HczzMZBjvzOCJM66vWuT1wS956juD70vitmpeFW4BDHgqsgwWvMARaabg6ZCu3kbfjHi3heFK8ozUQ6ZCu4idbpynTd6qj78zSoY4zKxHoXb2JtZAkAZDZD";
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
    
    if($message == "Reseller Anime"){
            $message_to_reply = "We are a digital textile startup. We can provide dropship Anime fullprint t-shirt, so no inventory is needed. We print on demand and we don’t have minimum order. Delivery will only take 4-7 days upon placement of your order.".
                                "These are some sample designs from our catalogue, you might want to them check out.";
            $jsonData = formatText($sender,$message_to_reply);
            $jsonData2 = getMockImage($sender);
            $jsonData3 = formatText($sender,"These are some our finished products."); 
            $jsonData4 = getFinishImage($sender);
            $jsonData5 = formatText($sender,"Our reseller price only Php 350 for Gildan t-shirt and Php 599 for fullprint t-shirt. Upload our catalogue to your FB page and we can dropship even for 1 piece of our product.");
      
            $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;
        
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
     
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData2);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
     
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData3);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
        
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData4);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
        
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData5);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
        
        
        
    }
    if($message == "Reseller Dota"){
        
        $message_to_reply = "We are a digital textile startup. We can provide dropship Dota fullprint t-shirt, so no inventory is needed. We print on demand and we don’t have minimum order. Delivery will only take 4-7 days upon placement of your order.".
                                "These are some sample designs from our catalogue, you might want to them check out.";
            $jsonData = formatText($sender,$message_to_reply);
            $jsonData2 = getMockImageDota($sender);
            $jsonData3 = formatText($sender,"These are some our finished products."); 
            $jsonData4 = getFinishImageDota($sender);
            $jsonData5 = formatText($sender,"Our reseller price only Php 350 for Gildan t-shirt and Php 599 for fullprint t-shirt. Upload our catalogue to your FB page and we can dropship even for 1 piece of our product.");
      
            $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;
        
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
     
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData2);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
     
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData3);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
        
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData4);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
        
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData5);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
    }else{
            $message_to_reply = "For More Information, you can contact our staff !";
            $jsonData = formatText($sender,$message_to_reply);
     
            $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;
            $ch = curl_init($url);
            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
            curl_setopt($ch,CURLOPT_HTTPHEADER,array('content-type: application/json'));
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            $result = curl_exec($ch);
            curl_close($ch);
    }
//    else if($message == "slider"){
//            $jsonData = getSlider($sender);
//            //file_put_contents('aaa.txt',$jsonData);
//    }else if($message == "button"){
//            $jsonData = getButton($sender);
//            //file_put_contents('aaa.txt',$jsonData);
//    }else if($message == "image"){
//            $jsonData = getImage($sender);
//            //file_put_contents('aaa.txt',$jsonData);
//    }else{
//        
//            // untuk ambil resi coid
//            $url = "http://c*s*om.co.id/admin/index.php?r=Generate/chatbot";
//            $data = "id=".$message;
//            
//            $ch = curl_init($url);
//            curl_setopt($ch,CURLOPT_POST,1);
//            curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
//           // curl_setopt($handle, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            
//            $result = curl_exec($ch);
//            curl_close($ch);
//            
//            $message_to_reply = $result;
//            //file_put_contents("logerror.txt", $result);
//            //$message_to_reply = "troll";
//     
//            $jsonData = formatText($sender,$message_to_reply);
//            
//    }
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
function getMockImage($sender){
        $output = '{
                    "attachment":{
                            "type":"image",
                            "payload":{
                                    "url":"http://custom.ph/images/facebook-reseller/anime-mock.jpg", 
                                    "is_reusable":true
                            }
                    }
    
                }';
            
    $jsonData = '{"recipient":{ "id":"'.$sender.'" },
                  "message":'.$output.'
                }';
                
                
    return $jsonData;
}
function getMockImageDota($sender){
        $output = '{
                    "attachment":{
                            "type":"image",
                            "payload":{
                                    "url":"http://custom.ph/images/facebook-reseller/dota-mock.jpg", 
                                    "is_reusable":true
                            }
                    }
    
                }';
            
    $jsonData = '{"recipient":{ "id":"'.$sender.'" },
                  "message":'.$output.'
                }';
                
                
    return $jsonData;
}
function getFinishImage($sender){
        $output = '{
                    "attachment":{
                            "type":"image",
                            "payload":{
                                    "url":"http://custom.ph/images/facebook-reseller/anime-finish.jpg", 
                                    "is_reusable":true
                            }
                    }
    
                }';
            
    $jsonData = '{"recipient":{ "id":"'.$sender.'" },
                  "message":'.$output.'
                }';
                
                
    return $jsonData;
}
function getFinishImageDota($sender){
        $output = '{
                    "attachment":{
                            "type":"image",
                            "payload":{
                                    "url":"http://custom.ph/images/facebook-reseller/dota-finish.jpg", 
                                    "is_reusable":true
                            }
                    }
    
                }';
            
    $jsonData = '{"recipient":{ "id":"'.$sender.'" },
                  "message":'.$output.'
                }';
                
                
    return $jsonData;
}
function getSlider($sender){
    
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
                  "message":'.$output.'
                }';
                
                
    return $jsonData;
}
function getButton($sender){
    
    
    
    $output = '{
                    "attachment":{
                            "type":"template",
                            "payload":{
                                    "template_type":"button",
                                    "text":"What do you want to do next?",
                                    "buttons":[
                                      {
                                        "type":"web_url",
                                        "url":"https://petersapparel.parseapp.com",
                                        "title":"Show Website"
                                      },
                                      {
                                        "type":"postback",
                                        "title":"Start Chatting",
                                        "payload":"USER_DEFINED_PAYLOAD"
                                      }
                                    ]
                            }
                    }
    
            }';
            
    
    $jsonData = '{"recipient":{ "id":"'.$sender.'" },
                  "message":'.$output.'
                }';
                
                
    return $jsonData;
}
?>
