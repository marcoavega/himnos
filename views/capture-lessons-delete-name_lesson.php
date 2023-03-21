<?php
$lt_controller = new LessonsTitlesController();

if ($_POST['r'] == 'capture-lessons-delete-name_lesson'   && !isset($_POST['crud'])) {

	$name_lesson = $lt_controller->get($_POST['name_lesson']);

	if (empty($name_lesson)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe la lección <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['name_lesson']);
	} else {
		$template_name_lesson = '
			<h2 class="">Eliminar lección</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar la lección: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="name_lesson" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-name_lesson">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_name_lesson,
			$name_lesson[0]['name_lesson'],
			$name_lesson[0]['name_lesson']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-name_lesson'   && $_POST['crud'] == 'del') {

	$name_lesson = $lt_controller->del($_POST['name_lesson']);

	$template = '
		<div class="container">
			<p class="item  delete">Lección <b>%s</b> eliminada</p>
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