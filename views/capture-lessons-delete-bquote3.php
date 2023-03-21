<?php
$tbc_controller = new  BiblesQuotesController();

if ($_POST['r'] == 'capture-lessons-delete-bquote3'   && !isset($_POST['crud'])) {

	$bquote3 = $tbc_controller->get3($_POST['id_bible_quote3']);

	if (empty($bquote3)) {
		$template = '
			<div class="container">
				<p class="item  error">No existen cita <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['id_bible_quote3']);
	} else {
		$template_bquote3 = '
			<h2 class="">Eliminar citas</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar cita: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="id_bible_quote3" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-bquote3">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_bquote3,
			$bquote3[0]['bible_quote3'],
			$bquote3[0]['id_bible_quote3']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-bquote3'   && $_POST['crud'] == 'del') {

	$bquote3 = $tbc_controller->del3($_POST['id_bible_quote3']);

	$template = '
		<div class="container">
			<p class="item  delete">Cita <b>%s</b> eliminada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['id_bible_quote3']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}