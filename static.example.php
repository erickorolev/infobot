<?php
include 'InfobotAPI.class.php';
$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt"); //вставить сгенерированный API ключ из личного кабинета
$params = array(
    'text' => 'Текст сообщения',
    'to' => '8(999)999-99-99',
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'gender' => '', // male|female, По умолчанию male
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
echo $api->sendMessage($params);

$params = array(
    'from' => 0, // С какого сообщения по счёту показатьвать результат (не обязательное поле)
    'start' => '2016-08-01 00:00:00', // С какой даты искать (не обязательное поле)
    'end' => '2016-08-31 23:59:29', // По какую дату искать (не обязательное поле)
    // Если не указана одна из дат условие выбора по периоду не будет работать.
    'phone' => '81234567890' // Номер телефона (не обязательное поле)
);
echo $api->getCalls($params);