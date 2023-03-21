<?php
$brc_controller = new BiblesReadingsTextController();

if ($_POST['r'] == 'capture-lessons-delete-bible_reading_text'   && !isset($_POST['crud'])) {

	$reading = $brc_controller->get($_POST['reading']);

	if (empty($reading)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe la lectura <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['reading']);
	} else {
		$template_reading = '
			<h2 class="">Eliminar lectura</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar lectura: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="reading" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-bible_reading_text">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_reading,
			$reading[0]['reading'],
			$reading[0]['reading']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-bible_reading_text'   && $_POST['crud'] == 'del') {

	$reading = $brc_controller->del($_POST['reading']);

	$template = '
		<div class="container">
			<p class="item  delete">Título de lectura <b>%s</b> eliminado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['reading']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}