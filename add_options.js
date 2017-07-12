
// Получение информации в формате JSON из PHP файла сервера.
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        response = JSON.parse(this.responseText);
		// Размещение опций в форму из JSON переменной
		$(document).ready(function(){
			$.each(response.scenaries, function(i) {
					$('#scenarios')
						.append($("<option></option>")
							.attr("value",response.scenaries[i].id)
							.text(response.scenaries[i].name)); 
			});
		});
    }
};
xmlhttp.open("GET", "dynamic.php", true);
xmlhttp.send();