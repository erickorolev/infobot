<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="add_options.js"></script>
</head>
<body>

<h2>Отправка автоматического звонка</h2>
<h3>Тип: сценарий</h3>

<p id="response"></p>

<form name="form" action="upload.php" method="post" enctype="multipart/form-data">  
  
  Выбор сценария:<br>
  <select id="scenarios" name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
	</select>
  <br><br>
  
  Номер телефона:
  <input type="text" name="to">
  <br><br>
  
  <input type="submit" name="submit" value="Отправить">  
  
</form>

</body>
</html>