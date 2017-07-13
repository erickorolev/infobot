
// Получение списка доступных сценариев в формате JSON из get_scenaries.php
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        response = JSON.parse(this.responseText);
		// Размещение списка сценариев из JSON переменной в видео опций формы 
		$(document).ready(function(){
			$.each(response.cids, function(i) {
					$('#cids')
						.append($("<option></option>")
							.attr("value",response.cids[i])
							.text(response.cids[i])); 
			});
		});
    }
};
xmlhttp.open("GET", "get_cids.php", true);
xmlhttp.send();