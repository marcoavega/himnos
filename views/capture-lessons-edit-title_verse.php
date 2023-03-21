<?php
$tvc_controller = new TitlesVersesController();

if ($_POST['r'] == 'capture-lessons-edit-title_verse'   && !isset($_POST['crud'])) {

	$tvc = $tvc_controller->get($_POST['title_verse']);

	if (empty($tvc)) {
		$template = '
			<div class="">
				<p class="">No existe el título de verso <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['title_verse']);
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
					<input type="text" placeholder="id_verse" value="%s" disabled required>
					<input type="hidden" name="id_verse" value="%s">
				</div>
				<div class="">
					<input type="text" name="title_verse" placeholder="Título de verso" value="%s" required>
				</div>
				<div class="">
					<select name="name_lesson" placeholder="name_lesson" required>
						<option value="">name_lesson</option>
						%s
					</select>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-title_verse">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_tvc,
			$tvc[0]['id_verse'],
			$tvc[0]['id_verse'],
			$tvc[0]['title_verse'],
			$name_lesson_select,
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-title_verse'   && $_POST['crud'] == 'set') {

	$save_tvc = array(
		'id_verse' =>  $_POST['id_verse'],
		'title_verse' =>  $_POST['title_verse'],
		'name_lesson' =>  $_POST['name_lesson'],
	);

	$tvc = $tvc_controller->set($save_tvc);

	$template = '
		<div class="container">
			<p class="item  edit">Título de verso <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['title_verse']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
