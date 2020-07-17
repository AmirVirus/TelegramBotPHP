<?php

$telegram = new Telegram('1271334562:AAHiJB0g6LFSdjRwZYHNaETUv-OuJdD0roE');
$chat_id = $telegram->ChatID();
$from_id = $telegram->FromID();
$text = $telegram->Text();
if($text == "/start"){
$telegram->sendMessage(['chat_id' => $from_id, 'text' => 'Hi']);
}

?>
