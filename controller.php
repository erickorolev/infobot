<?php
include 'InfobotAPI.class.php';
$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt"); //вставить сгенерированный API ключ из личного кабинета

// Проверяем, какой тип сообщения выбрал пользователя и наполняем $params необходимыми параметрами для этого типа
if ($_POST['type'] == 'text') {
	
	$params = array(
		'to' => clean_input($_POST['to']),
		'type' => clean_input($_POST['type']),
		'text' => clean_input($_POST['text']),
		'aon' => clean_input($_POST['cids']), // АОН
	);
		
} else if ($_POST['type'] == 'audio') {
	
	// Подключаем файл-обработчик загрузки аудио файлов
	require 'upload.php';
	
	$params = array(
		'to' => clean_input($_POST['to']),
		'type' => clean_input($_POST['type']),
		// URL проигрываемого аудио файла.
		'url' => str_replace("\\",'/',"http://".$_SERVER['HTTP_HOST'].substr(getcwd(),strlen($_SERVER['DOCUMENT_ROOT']))) . DIRECTORY_SEPARATOR . $_FILES["fileToUpload"]["name"],
		'aon' => clean_input($_POST['cids']), // АОН
	);
		
} else if ($_POST['type'] == 'dynamic') {
	
	$vaiables = array(
		'lname' => clean_input($_POST['lname']),
		'fname' => clean_input($_POST['fname']),
		'mname' => clean_input($_POST['mname']),
		'phone' => clean_input($_POST['to'])
	);

	$params = array(
		'to' => clean_input($_POST['to']),
		'type' => clean_input($_POST['type']),
		'aon' => clean_input($_POST['cids']), // АОН
		'scenary' => clean_input($_POST['scenarios']), // Cценарий
		'variables' => $vaiables //Переменные для используемых в сценарии шаблонов
	);
}

// Функция для преобразования введенных пользователем данных в целях безопасности и избавления от сторонних элементов.
function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$api->sendMessage($params); 
echo $api->response;
?>