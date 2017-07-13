<?php

// В этом файле обрабатывается загрузка аудио-файла
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$audioFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Проверяем, существует ли такой же файл на сервере
if (file_exists($target_file)) {
    echo "Такой файл уже существует.";
    $uploadOk = 0;
}

// Ограничиваем размер загружаемого файла 10 МБ
define('MB', 1048576); // Определяем размер Мегабайта
if ($_FILES["fileToUpload"]["size"] > 10 * MB) {
    echo "Размер загружаемого файла не может быть более 10 МБ.";
    $uploadOk = 0;
}

// Ограничиваем формат загружаемого файла mp3 & wav
if($audioFileType != "mp3" && $audioFileType != "wav") {
    echo "Допустимы только mp3 и wav форматы файлов.";
    $uploadOk = 0;
}

// Если при загрузке не соблюдены какие-то критерии
if ($uploadOk == 0) {
    echo "Ваш файл не был загружен.";
// Если все критерии соблюдены, пробуем загрузить файл на сервер
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Файл ". basename( $_FILES["fileToUpload"]["name"]). " был загружен.";
    } else {
        echo "Возникла ошибка при загрузке файла.";
    }
}
?>