<?php
$qc_controller = new QuestionsController1();

if ($_POST['r'] == 'capture-lessons-delete-question8'   && !isset($_POST['crud'])) {

	$question8 = $qc_controller->get8($_POST['question8']);

	if (empty($question8)) {
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

		printf($template, $_POST['question8']);
	} else {
		$template_question8 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="question8" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-question8">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_question8,
			$question8[0]['question8'],
			$question8[0]['question8']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-question8'   && $_POST['crud'] == 'del') {

	$question8 = $qc_controller->del8($_POST['question8']);

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

	printf($template, $_POST['question8']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}