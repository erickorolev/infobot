
<!-- 
  - Тестовое задание
  - Используя api инфобот. Написать форму и скрипт со следующим функционалом.
  - Форма получает список доступных сценариев и аонов.
  - Можно выбрать тип сообщения: текст (TTS), аудио, по сценарию.
  - Для типа аудио нужна загрузка mp3/wav файла.
  - Для типа текст - поле ввода.
  - Для по сценарию - выбор сценария из ЛК.
  - При отправке формы все должно сработать.
-->

<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<h2>Форма отправки сообщения</h2>

<form name="form" action="static.example.php" method="post">  
  
  Текст сообщения:<br>
  <textarea name="text" rows="5" cols="40"></textarea>
  <br><br>
  
  Номер телефона:
  <input type="text" name="to">
  <br><br>
  
  <input type="submit" name="submit" value="Отправить">  
  
</form>

</body>
</html>