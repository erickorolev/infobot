
// Получение информации в формате JSON из PHP файла сервера.
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        response = JSON.parse(this.responseText);
		alert(response.scenaries[0].name);
    }
};
xmlhttp.open("GET", "dynamic.php", true);
xmlhttp.send();

/*
// Get data as JSON from a PHP file on the server.
$(document).ready(function()
    {       
            $.post('response.json', function(data) 
            {
                var pushedData = jQuery.parseJSON(data);
                $.each(pushedData, function(i, serverData)
                {
                    alert(i);
                })
            })
    });
*/

/*
// Get data as JSON from a PHP file on the server.
$(document).ready(function(){
	var neededData;
	$.getJSON('response.json', data, function(jsonData) {                       
		neededData = jsonData; 
	});
	alert(neededData.scenaries.name);
});
*/

// Проверяю вставку в html
/*
$(document).ready(function(){
	document.getElementById("response").innerHTML = "Сюда должен залезть JSON ответ";
});
*/

// Размещение опций из JSON переменной
/*
// Add options to a select
$.each(selectValues, function(key, value) {   
     $('#mySelect')
          .append($('<option>', { value : key })
          .text(value)); 
});
*/