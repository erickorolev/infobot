
// Получение списка доступных сценариев в формате JSON из get_scenaries.php
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        response = JSON.parse(this.responseText);
		// Размещение списка сценариев из JSON переменной в видео опций формы 
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
xmlhttp.open("GET", "get_scenaries.php", true);
xmlhttp.send();