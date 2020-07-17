<?php

$telegram = new Telegram('1271334562:AAHiJB0g6LFSdjRwZYHNaETUv-OuJdD0roE');
$chat_id = $telegram->ChatID();
$data = $telegram->GetData();
$from_id = $data['message']['from']['id'];
$telegram->sendMessage(['chat_id' => $from_id, 'text' => 'Hi']);

?>
