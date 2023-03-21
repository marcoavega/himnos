<?php
$qc_controller = new QuestionsController1();

if ($_POST['r'] == 'capture-lessons-delete-question1'   && !isset($_POST['crud'])) {

	$question1 = $qc_controller->get($_POST['question1']);

	if (empty($question1)) {
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

		printf($template, $_POST['question1']);
	} else {
		$template_question1 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="question1" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-question1">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_question1,
			$question1[0]['question1'],
			$question1[0]['question1']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-question1'   && $_POST['crud'] == 'del') {

	$question1 = $qc_controller->del1($_POST['question1']);

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

	printf($template, $_POST['question1']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
