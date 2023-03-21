<?php
$qc_controller = new QuestionsController1();

if ($_POST['r'] == 'capture-lessons-delete-question6'   && !isset($_POST['crud'])) {

	$question6 = $qc_controller->get6($_POST['question6']);

	if (empty($question6)) {
		$template = '
			<div class="container">
				<p class="item  error">No existen preguntas <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['question6']);
	} else {
		$template_question6 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="question6" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-question6">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_question6,
			$question6[0]['question6'],
			$question6[0]['question6']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-question6'   && $_POST['crud'] == 'del') {

	$question6 = $qc_controller->del6($_POST['question6']);

	$template = '
		<div class="container">
			<p class="item  delete">Pregunta <b>%s</b> eliminada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['question6']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}