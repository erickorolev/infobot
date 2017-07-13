<?php
include 'InfobotAPI.class.php';
$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt"); //вставить сгенерированный API ключ из личного кабинета

// Проверяем, какой тип сообщения выбрал пользователя и наполняем $params необходимыми параметрами для этого типа
if ($_POST['type'] == 'text') {
	
	$params = array(
		'to' => $_POST['to'],
		'type' => $_POST['type'],
		'text' => $_POST['text'],
		'aon' => $_POST['cids'], // АОН
	);
		
} else if ($_POST['type'] == 'audio') {
	
	// Подключаем файл-обработчик загрузки аудио файлов
	require 'upload.php';
	
	$params = array(
		'to' => $_POST['to'],
		'type' => $_POST['type'],
		// URL проигрываемого аудио файла.
		'url' => str_replace("\\",'/',"http://".$_SERVER['HTTP_HOST'].substr(getcwd(),strlen($_SERVER['DOCUMENT_ROOT']))) . DIRECTORY_SEPARATOR . $_FILES["fileToUpload"]["name"],
		'aon' => $_POST['cids'], // АОН
	);
		
} else if ($_POST['type'] == 'dynamic') {
	
	$vaiables = array(
		'lname' => $_POST['lname'],
		'fname' => $_POST['fname'],
		'mname' => $_POST['mname'],
		'phone' => $_POST['to']
	);

	$params = array(
		'to' => $_POST['to'],
		'type' => $_POST['type'],
		'aon' => $_POST['cids'], // АОН
		'scenary' => $_POST['scenarios'], // Cценарий
		'variables' => $vaiables, //Переменные для используемых в сценарии шаблонов
	);
}

// $api->sendMessage($params); 
// echo $api->response;
echo '<pre>'; print_r($params); echo '</pre>';
?>