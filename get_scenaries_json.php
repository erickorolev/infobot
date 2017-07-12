<?php
include 'InfobotAPI.class.php';

$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt");
$response = json_decode($api->getScenaries()); // Получаем список доступных сценариев

echo $api->getScenaries(); // Вывод данных в формате JSON для add_options.js
?>