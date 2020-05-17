<?php 
/*$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://education.rw/tmis/do/teach_msg_json.php?id=11');
$result = curl_exec($ch);
curl_close($ch);
if (! $result) {
    return false;
}

$obj = json_decode(utf8_encode($result));
if (empty($obj) || json_last_error() !== JSON_ERROR_NONE) {
    return false;
}

foreach($obj->data as $key=>$object){
    echo $object->message_type;
    
}
*/
include("function.php");
$receiver = "shyirambere2016@gmail.com";
$msg = "Hello Alexis";
send_email($receiver,$msg);
?>