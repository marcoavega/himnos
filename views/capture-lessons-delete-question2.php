<?php
$qc_controller = new QuestionsController1();

if ($_POST['r'] == 'capture-lessons-delete-question2'   && !isset($_POST['crud'])) {

	$question2 = $qc_controller->get2($_POST['question2']);

	if (empty($question2)) {
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

		printf($template, $_POST['question2']);
	} else {
		$template_question2 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="question2" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-question2">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_question2,
			$question2[0]['question2'],
			$question2[0]['question2']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-question2'   && $_POST['crud'] == 'del') {

	$question2 = $qc_controller->del2($_POST['question2']);

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

	printf($template, $_POST['question2']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}