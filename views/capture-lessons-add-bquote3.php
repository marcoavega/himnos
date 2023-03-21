<?php
if ($_POST['r'] == 'capture-lessons-add-bquote3'   && !isset($_POST['crud'])) {

	$name_lessons_controller = new LessonsTitlesController();
	$name_lesson = $name_lessons_controller->get();
	$name_lesson_select = '';
	for ($n = 0; $n < count($name_lesson); $n++) {
		$name_lesson_select .= '<option value="' . $name_lesson[$n]['id_lesson_title'] . '">' . $name_lesson[$n]['name_lesson'] . '</option>';
	}

	$number_question_controller = new NumberQuestionsController();
	$number_question = $number_question_controller->get();
	$number_question_select = '';
	for ($n = 0; $n < count($number_question); $n++) {
		$number_question_select .= '<option value="' . $number_question[$n]['id_number_question'] . '">' . $number_question[$n]['number_question'] . '</option>';
	}

	printf('
		<h2 class="">Agregar cita bíblica 3</h2>
		<form method="POST" class="">
			<div class="">
				<input type="hidden" name="id_bible_quote3" value="0">
			</div>
			<div class="">
				<textarea name="bible_quote3" rows="10" cols="40" placeholder="Citas" required></textarea>
			</div>
			<div class="">
				<select name="name_lesson" placeholder="Nombre de lección" required>
					<option value="">name_lesson</option>
					%s
				</select>
			</div>
            <div class="">
				<select name="number_question" placeholder="Número de lección" required>
					<option value="">number_question</option>
					%s
				</select>
			</div>
			<div class="">
				<input  class="button  add" type="submit" value="Agregar">
				<input type="hidden" name="r" value="capture-lessons-add-bquote3">
				<input type="hidden" name="crud" value="set">
			</div>
		</form>
	', $name_lesson_select, $number_question_select);
} else if ($_POST['r'] == 'capture-lessons-add-bquote3'   && $_POST['crud'] == 'set') {
	$tbc_controller = new  BiblesQuotesController();

	$newtvc = array(
		'id_bible_quote3' =>  $_POST['id_bible_quote3'],
		'bible_quote3' =>  $_POST['bible_quote3'],
		'name_lesson' =>  $_POST['name_lesson'],
		'number_question' =>  $_POST['number_question'],
	);

	$tbc = $tbc_controller->set3($newtvc);

	$template = '
		<div class="container">
			<p class="item  add">cita bíblica <b>%s</b> salvada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf(
		$template,
		$_POST['bible_quote3'],
	);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}