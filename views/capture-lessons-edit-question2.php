<?php
$qc_controller = new QuestionsController1();

if ($_POST['r'] == 'capture-lessons-edit-question2'   && !isset($_POST['crud'])) {

	$qc = $qc_controller->get2($_POST['question2']);

	if (empty($qc)) {
		$template = '
			<div class="">
				<p class="">No existen preguntas <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['question2']);
	} else {

		$name_lesson_controller = new LessonsTitlesController();
		$name_lesson = $name_lesson_controller->get();
		$name_lesson_select = '';
		for ($a = 0; $a < count($name_lesson); $a++) {
			$selected = ($qc[0]['name_lesson'] == $name_lesson[$a]['name_lesson']) ? 'selected' : '';
			$name_lesson_select .= '<option value="' . $name_lesson[$a]['id_lesson_title'] . '"' . $selected . '>' . $name_lesson[$a]['name_lesson'] . '</option>';
		}

		$template_qc = '
			<h2 class="">Editar objetivo</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="id_question2" value="%s" disabled required>
					<input type="hidden" name="id_question2" value="%s">
				</div>
				<div class="">
					<input type="text" name="question2" placeholder="Pregunta" value="%s" required>
				</div>
				<div class="">
					<select name="name_lesson" placeholder="name_lesson" required>
						<option value="">name_lesson</option>
						%s
					</select>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-question2">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_qc,
			$qc[0]['id_question2'],
			$qc[0]['id_question2'],
			$qc[0]['question2'],
			$name_lesson_select,
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-question2'   && $_POST['crud'] == 'set') {

	$save_qc = array(
		'id_question2' =>  $_POST['id_question2'],
		'question2' =>  $_POST['question2'],
		'name_lesson' =>  $_POST['name_lesson'],
	);

	$qc = $qc_controller->set2($save_qc);

	$template = '
		<div class="container">
			<p class="item  edit">Pregunta <b>%s</b> salvada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['question2']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}