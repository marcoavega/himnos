<?php
$tbc_controller = new  TitlesBiblesQuotesController();

if ($_POST['r'] == 'capture-lessons-edit-quote3'   && !isset($_POST['crud'])) {

	$tbc = $tbc_controller->get3($_POST['id_title_bible_quote3']);

	if (empty($tbc)) {
		$template = '
			<div class="">
				<p class="">No existe la cita <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['title_bible_quote3']);
	} else {

		$name_lesson_controller = new LessonsTitlesController();
		$name_lesson = $name_lesson_controller->get();
		$name_lesson_select = '';
		for ($a = 0; $a < count($name_lesson); $a++) {
			$selected = ($tbc[0]['name_lesson'] == $name_lesson[$a]['name_lesson']) ? 'selected' : '';
			$name_lesson_select .= '<option value="' . $name_lesson[$a]['id_lesson_title'] . '"' . $selected . '>' . $name_lesson[$a]['name_lesson'] . '</option>';
		}
		$number_question_controller = new NumberQuestionsController();
		$number_question = $number_question_controller->get();
		$number_question_select = '';
		for ($a = 0; $a < count($number_question); $a++) {
			$selected = ($tbc[0]['number_question'] == $number_question[$a]['number_question']) ? 'selected' : '';
			$number_question_select .= '<option value="' . $number_question[$a]['id_number_question'] . '"' . $selected . '>' . $number_question[$a]['number_question'] . '</option>';
		}

		$template_tbc = '
			<h2 class="">Editar objetivo</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="id_title_bible_quote3" value="%s" disabled required>
					<input type="hidden" name="id_title_bible_quote3" value="%s">
				</div>
				<div class="">
					<input type="text" name="title_bible_quote3" placeholder="Objetivos" value="%s" required>
				</div>
				<div class="">
					<select name="name_lesson" placeholder="name_lesson" required>
						<option value="">name_lesson</option>
						%s
					</select>
				</div>
                <div class="">
					<select name="number_question" placeholder="Numero pregunta" required>
						<option value="">number_question</option>
						%s
					</select>
				</div>
				<div class="p_35">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-quote3">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_tbc,
			$tbc[0]['id_title_bible_quote3'],
			$tbc[0]['id_title_bible_quote3'],
			$tbc[0]['title_bible_quote3'],
			$name_lesson_select,
			$number_question_select
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-quote3'   && $_POST['crud'] == 'set') {

	$save_tbc = array(
		'id_title_bible_quote3' =>  $_POST['id_title_bible_quote3'],
		'title_bible_quote3' =>  $_POST['title_bible_quote3'],
		'name_lesson' =>  $_POST['name_lesson'],
		'number_question' =>  $_POST['number_question'],
	);

	$tbc = $tbc_controller->set3($save_tbc);

	$template = '
		<div class="container">
			<p class="item  edit">Cita <b>%s</b> salvada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['title_bible_quote3']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}