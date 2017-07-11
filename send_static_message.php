<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<h2>Отправка автоматического звонка</h2>
<h3>Тип: синтез речи (text to speech)</h3>

<form name="form" action="static.php" method="post">  
  
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