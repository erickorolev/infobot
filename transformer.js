
// Трансформирует форму на основании выбора пользователя
$(document).ready(function(){
	
	// При загрузке страницы скрываем все поля формы, кроме выбора типа сообщения
	$("#for_text, #for_audio, #for_dynamic").hide();
	
	// В зависимости от выбора типа сообщения показываем необходимые поля, а остальные скрываем.
	// В зависимости от выбора типа сообщения делаем необходимые поля обязательными к заполнению, а с других полей это свойство снимаем.
	$("#text").click(function() {
			
		$("#for_text, #for_all").show();
		$(".for_text, .for_all").prop('required',true);
				
		$("#for_audio, #for_dynamic").hide();
		$(".for_audio, .for_dynamic").prop('required',false);
		
	});
	
	$("#audio").click(function() {
			
		$("#for_audio, #for_all").show();
		$(".for_audio, .for_all").prop('required',true);
				
		$("#for_text, #for_dynamic").hide();
		$(".for_text, .for_dynamic").prop('required',false);
		
	});
	
	$("#dynamic").click(function() {
			
		$("#for_dynamic, #for_all").show();
		$(".for_dynamic, .for_all").prop('required',true);
				
		$("#for_text, #for_audio").hide();
		$(".for_text, .for_audio").prop('required',false);
		
	});
	
});