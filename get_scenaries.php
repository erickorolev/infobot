<?php
include 'InfobotAPI.class.php';

$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt");

echo $api->getScenaries(); // Вывод данных о сценариях в формате JSON для add_options.js
?>