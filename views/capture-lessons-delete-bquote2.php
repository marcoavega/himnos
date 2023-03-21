<?php
$tbc_controller = new  BiblesQuotesController();

if ($_POST['r'] == 'capture-lessons-delete-bquote2'   && !isset($_POST['crud'])) {

	$bquote2 = $tbc_controller->get2($_POST['id_bible_quote2']);

	if (empty($bquote2)) {
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

		printf($template, $_POST['id_bible_quote2']);
	} else {
		$template_bquote2 = '
			<h2 class="">Eliminar citas</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar cita: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="id_bible_quote2" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-bquote2">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_bquote2,
			$bquote2[0]['bible_quote2'],
			$bquote2[0]['id_bible_quote2']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-bquote2'   && $_POST['crud'] == 'del') {

	$bquote2 = $tbc_controller->del2($_POST['id_bible_quote2']);

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

	printf($template, $_POST['id_bible_quote2']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}