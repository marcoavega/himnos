<?php
$lt_controller = new LessonsTitlesController();

if ($_POST['r'] == 'capture-lessons-edit-name_lesson'   && !isset($_POST['crud'])) {

	$lt = $lt_controller->get($_POST['name_lesson']);

	if (empty($lt)) {
		$template = '
			<div class="">
				<p class="">No existe la lección <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['name_lesson']);
	} else {

		$date_controller = new DatesController();
		$date = $date_controller->get();
		$date_select = '';
		for ($a = 0; $a < count($date); $a++) {
			$selected = ($lt[0]['date'] == $date[$a]['date']) ? 'selected' : '';
			$date_select .= '<option value="' . $date[$a]['date'] . '"' . $selected . '>' . $date[$a]['date'] . '</option>';
		}

		$template_lt = '
			<h2 class="">Editar nombre lecciones</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="id_lesson_title" value="%s" disabled required>
					<input type="hidden" name="id_lesson_title" value="%s">
				</div>
				<div class="">
					<input type="text" name="name_lesson" placeholder="Nombre lección" value="%s" required>
				</div>
				<div class="">
					<select name="date" placeholder="date" required>
						<option value="">date</option>
						%s
					</select>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-name_lesson">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_lt,
			$lt[0]['id_lesson_title'],
			$lt[0]['id_lesson_title'],
			$lt[0]['name_lesson'],
			$date_select,
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-name_lesson'   && $_POST['crud'] == 'set') {

	$save_lt = array(
		'id_lesson_title' =>  $_POST['id_lesson_title'],
		'name_lesson' =>  $_POST['name_lesson'],
		'date' =>  $_POST['date'],
	);

	$lt = $lt_controller->set($save_lt);

	$template = '
		<div class="container">
			<p class="item  edit">Nombre <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['name_lesson']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}