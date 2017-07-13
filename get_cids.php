<?php
include 'InfobotAPI.class.php';

$api = new InfobotAPI("ye58b133khrtKzZkDBzwzuuepP4NsFhNiQUMjkTyOj3wsKgrLK95tUTtPI7DSQtt");

echo $api->getCids(); // Вывод данных об АОНах в формате JSON для add_cids.js
?>