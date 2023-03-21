<?php
$tvc_controller = new TextVersesController();

if ($_POST['r'] == 'capture-lessons-edit-verse_text'   && !isset($_POST['crud'])) {

	$tvc = $tvc_controller->get($_POST['verse_text']);

	if (empty($tvc)) {
		$template = '
			<div class="">
				<p class="">No existe el texto de verso <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['verse_text']);
	} else {

		$name_lesson_controller = new LessonsTitlesController();
		$name_lesson = $name_lesson_controller->get();
		$name_lesson_select = '';
		for ($a = 0; $a < count($name_lesson); $a++) {
			$selected = ($tvc[0]['name_lesson'] == $name_lesson[$a]['name_lesson']) ? 'selected' : '';
			$name_lesson_select .= '<option value="' . $name_lesson[$a]['id_lesson_title'] . '"' . $selected . '>' . $name_lesson[$a]['name_lesson'] . '</option>';
		}

		$template_tvc = '
			<h2 class="">Editar objetivo</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="id_verses_text" value="%s" disabled required>
					<input type="hidden" name="id_verses_text" value="%s">
				</div>
				<div class="">
					<input type="text" name="verse_text" placeholder="Título de verso" value="%s" required>
				</div>
				<div class="">
					<select name="name_lesson" placeholder="name_lesson" required>
						<option value="">name_lesson</option>
						%s
					</select>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-verse_text">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_tvc,
			$tvc[0]['id_verses_text'],
			$tvc[0]['id_verses_text'],
			$tvc[0]['verse_text'],
			$name_lesson_select,
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-verse_text'   && $_POST['crud'] == 'set') {

	$save_tvc = array(
		'id_verses_text' =>  $_POST['id_verses_text'],
		'verse_text' =>  $_POST['verse_text'],
		'name_lesson' =>  $_POST['name_lesson'],
	);

	$tvc = $tvc_controller->set($save_tvc);

	$template = '
		<div class="container">
			<p class="item  edit">Texto de verso <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['verse_text']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}