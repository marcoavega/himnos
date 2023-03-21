<?php
$ltc_controller = new TextVersesController();

if ($_POST['r'] == 'capture-lessons-delete-verse_text'   && !isset($_POST['crud'])) {

	$verse_text = $ltc_controller->get($_POST['verse_text']);

	if (empty($verse_text)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe el verso <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['verse_text']);
	} else {
		$template_verse_text = '
			<h2 class="">Eliminar verso</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar el verso: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="verse_text" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-verse_text">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_verse_text,
			$verse_text[0]['verse_text'],
			$verse_text[0]['verse_text']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-verse_text'   && $_POST['crud'] == 'del') {

	$verse_text = $ltc_controller->del($_POST['verse_text']);

	$template = '
		<div class="container">
			<p class="item  delete">Verso <b>%s</b> eliminado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['verse_text']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}