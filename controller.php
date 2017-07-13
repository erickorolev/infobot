<?php
include 'InfobotAPI.class.php';
include 'upload.php';
$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt"); //вставить сгенерированный API ключ из личного кабинета

$vaiables = array(
    'lname' => $_POST['lname'],
    'fname' => $_POST['fname'],
    'mname' => $_POST['mname'],
    'phone' => $_POST['to']
);

$params = array(
	'to' => $_POST['to'],
	'type' => 'audio',
    'text' => $_POST['text'],
	// URL проигрываемого аудио файла. Отвратительная получилась строка. Но более элегантного решения я не нашел.
	'url' => str_replace("\\",'/',"http://".$_SERVER['HTTP_HOST'].substr(getcwd(),strlen($_SERVER['DOCUMENT_ROOT']))) . DIRECTORY_SEPARATOR . $_FILES["fileToUpload"]["name"],
    'aon' => $_POST['cids'], // АОН
	'scenary' => $_POST['scenarios'], // Cценарий
	'variables' => $vaiables, //Переменные для используемых в сценарии шаблонов
);

// $api->sendMessage($params); 
// echo $api->response;
echo '<pre>'; print_r($params); echo '</pre>';
?>