<?php
include 'InfobotAPI.class.php';
$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt"); //вставить сгенерированный API ключ из личного кабинета
$params = array(
    'to' => $_POST['to'],
    'type' => 'audio',
	// URL проигрываемого аудио файла. Отвратительная получилась строка. Но более элегантного решения я не нашел.
    'url' => str_replace("\\",'/',"http://".$_SERVER['HTTP_HOST'].substr(getcwd(),strlen($_SERVER['DOCUMENT_ROOT']))) . DIRECTORY_SEPARATOR . $_FILES["fileToUpload"]["name"],
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
$api->sendMessage($params);
echo $api->response;
// echo $params['to'];
// echo $params['url'];
?>