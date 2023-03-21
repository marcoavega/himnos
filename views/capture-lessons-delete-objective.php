<?php
$ojt_controller = new ObjectivesController();

if ($_POST['r'] == 'capture-lessons-delete-objective'   && !isset($_POST['crud'])) {

	$objective = $ojt_controller->get($_POST['objective']);

	if (empty($objective)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe el objetivo <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['objective']);
	} else {
		$template_objective = '
			<h2 class="">Eliminar objetivo</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar el objetvo: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="objective" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-objective">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_objective,
			$objective[0]['objective'],
			$objective[0]['objective']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-objective'   && $_POST['crud'] == 'del') {

	$objective = $ojt_controller->del($_POST['objective']);

	$template = '
		<div class="container">
			<p class="item  delete">Objetivo <b>%s</b> eliminado</p>
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