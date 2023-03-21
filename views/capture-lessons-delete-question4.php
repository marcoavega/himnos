<?php
$qc_controller = new QuestionsController1();

if ($_POST['r'] == 'capture-lessons-delete-question4'   && !isset($_POST['crud'])) {

	$question4 = $qc_controller->get4($_POST['question4']);

	if (empty($question4)) {
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

		printf($template, $_POST['question4']);
	} else {
		$template_question4 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="question4" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-question4">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_question4,
			$question4[0]['question4'],
			$question4[0]['question4']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-question4'   && $_POST['crud'] == 'del') {

	$question4 = $qc_controller->del4($_POST['question4']);

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

	printf($template, $_POST['question4']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}