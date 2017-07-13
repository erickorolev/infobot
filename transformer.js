
// Трансформирует форму на основании выбора пользователя
function checkRadio() {
    if (document.getElementById('text').checked) {
        document.getElementById('for_text').style.display = 'block';
		document.getElementById('for_all').style.display = 'block';
		document.getElementById('for_audio').style.display = 'none';
		document.getElementById('for_dynamic').style.display = 'none';
    } else if (document.getElementById('audio').checked) {
		document.getElementById('for_audio').style.display = 'block';
		document.getElementById('for_all').style.display = 'block';
		document.getElementById('for_text').style.display = 'none';
		document.getElementById('for_dynamic').style.display = 'none';
	} else if (document.getElementById('dynamic').checked) {
		document.getElementById('for_dynamic').style.display = 'block';
		document.getElementById('for_all').style.display = 'block';
		document.getElementById('for_text').style.display = 'none';
		document.getElementById('for_audio').style.display = 'none';
	}
}	