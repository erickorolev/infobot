<?php
include 'InfobotAPI.class.php';
$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt"); //вставить сгенерированный API ключ из личного кабинета
$params = array(
    'to' => $_POST['to'],
    'type' => 'audio',
    'url' => $_POST['audio'], // URL проигрываемого аудио файла
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
$api->sendMessage($params);
echo $api->response;
