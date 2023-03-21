<?php
$ojt_controller = new ObjectivesController();

if ($_POST['r'] == 'capture-lessons-edit-objective'   && !isset($_POST['crud'])) {

	$ojt = $ojt_controller->get($_POST['objective']);

	if (empty($ojt)) {
		$template = '
			<div class="">
				<p class="">No existe el objetivo <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['objective']);
	} else {

		$name_lesson_controller = new LessonsTitlesController();
		$name_lesson = $name_lesson_controller->get();
		$name_lesson_select = '';
		for ($a = 0; $a < count($name_lesson); $a++) {
			$selected = ($ojt[0]['name_lesson'] == $name_lesson[$a]['name_lesson']) ? 'selected' : '';
			$name_lesson_select .= '<option value="' . $name_lesson[$a]['id_lesson_title'] . '"' . $selected . '>' . $name_lesson[$a]['name_lesson'] . '</option>';
		}

		$template_ojt = '
			<h2 class="">Editar objetivo</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="id_objective" value="%s" disabled required>
					<input type="hidden" name="id_objective" value="%s">
				</div>
				<div class="">
					<input type="text" name="objective" placeholder="Objetivos" value="%s" required>
				</div>
				<div class="">
					<select name="name_lesson" placeholder="name_lesson" required>
						<option value="">name_lesson</option>
						%s
					</select>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-objective">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_ojt,
			$ojt[0]['id_objective'],
			$ojt[0]['id_objective'],
			$ojt[0]['objective'],
			$name_lesson_select,
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-objective'   && $_POST['crud'] == 'set') {

	$save_ojt = array(
		'id_objective' =>  $_POST['id_objective'],
		'objective' =>  $_POST['objective'],
		'name_lesson' =>  $_POST['name_lesson'],
	);

	$ojt = $ojt_controller->set($save_ojt);

	$template = '
		<div class="container">
			<p class="item  edit">Objetivo <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['objective']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
