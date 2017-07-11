<?php
include 'InfobotAPI.class.php';

//================ СЦЕНАРИЙ ИЗ СПИСКА В ЛИЧНОМ КАБИНЕТЕ ====================//
$api = new InfobotAPI("apiKey");
$response = json_decode($api->getScenaries()); // Получаем список доступных сценариев

$vaiables = array(
    'lname' => 'Фамилия',
    'fname' => 'Имя',
    'mname' => 'Отчество',
    'phone' => 'Телефон'
);
$params = array(
    'to' => '8(999)999-99-99',
    'type' => 'dynamic',
    'scenary' => $response->scenaries[0]->id, // Первый сценарий из списка
    'variables' => $vaiables, //Переменные для используемых в сценарии шаблонов
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
echo $api->response;
$api->sendMessage($params);



