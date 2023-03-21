<?php
$brc_controller = new BiblesReadingsController();

if ($_POST['r'] == 'capture-lessons-delete-bible_reading'   && !isset($_POST['crud'])) {

	$title_reading = $brc_controller->get($_POST['title_reading']);

	if (empty($title_reading)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe título de la lectura <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['title_reading']);
	} else {
		$template_title_reading = '
			<h2 class="">Eliminar título de lectura</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar el título de lectura: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="title_reading" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-bible_reading">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_title_reading,
			$title_reading[0]['title_reading'],
			$title_reading[0]['title_reading']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-bible_reading'   && $_POST['crud'] == 'del') {

	$title_reading = $brc_controller->del($_POST['title_reading']);

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

	printf($template, $_POST['title_reading']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}