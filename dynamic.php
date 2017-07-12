<?php
include 'InfobotAPI.class.php';

//================ СЦЕНАРИЙ ИЗ СПИСКА В ЛИЧНОМ КАБИНЕТЕ ====================//
$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt");
$response = json_decode($api->getScenaries()); // Получаем список доступных сценариев

$vaiables = array(
    'lname' => $_POST['lname'],
    'fname' => $_POST['fname'],
    'mname' => $_POST['mname'],
    'phone' => $_POST['to']
);
$params = array(
    'to' => $_POST['to'],
    'type' => 'dynamic',
    'scenary' => $_POST['scenarios'], // Первый сценарий из списка
    'variables' => $vaiables, //Переменные для используемых в сценарии шаблонов
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);

$api->sendMessage($params);
echo $api->response;
// echo '<pre>'; print_r($response); echo '</pre>';
// echo '<pre>'; print_r($params); echo '</pre>';
?>