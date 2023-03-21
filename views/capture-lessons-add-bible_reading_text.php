<?php
if ($_POST['r'] == 'capture-lessons-add-bible_reading_text' && !isset($_POST['crud'])) {

	$name_lessons_controller = new LessonsTitlesController();
	$name_lesson = $name_lessons_controller->get();
	$name_lesson_select = '';
	for ($n = 0; $n < count($name_lesson); $n++) {
		$name_lesson_select .= '<option value="' . $name_lesson[$n]['id_lesson_title'] . '">' . $name_lesson[$n]['name_lesson'] . '</option>';
	}

	printf('
		<h2 class="">Agregar comentario</h2>
		<form method="POST" class="">
			<div class="">
				<input type="hidden" name="id_bibles_reading_text" value="0">
			</div>
			<div class="form-group">
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Lectura bíblica texto" name="reading"></textarea>
		  </div>
			<div class="">
				<select name="name_lesson" placeholder="Nombre de lección" required>
					<option value="">name_lesson</option>
					%s
				</select>
			</div>
			<div class="">
				<input  class="button  add" type="submit" value="Agregar">
				<input type="hidden" name="r" value="capture-lessons-add-bible_reading_text">
				<input type="hidden" name="crud" value="set">
			</div>
		</form>
	', $name_lesson_select);
} else if ($_POST['r'] == 'capture-lessons-add-bible_reading_text'   && $_POST['crud'] == 'set') {
	$brc_controller = new BiblesReadingsTextController();

	$newtvc = array(
		'id_bibles_reading_text' =>  $_POST['id_bibles_reading_text'],
		'reading' =>  $_POST['reading'],
		'name_lesson' =>  $_POST['name_lesson']
	);

	$brc = $brc_controller->set($newtvc);

	$template = '
		<div class="container">
			<p class="item  add">Lectura bíblicas <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf(
		$template,
		$_POST['reading'],
	);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}