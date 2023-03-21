<?php
$tbc_controller = new  TitlesBiblesQuotesController();

if ($_POST['r'] == 'capture-lessons-delete-quote5'   && !isset($_POST['crud'])) {

	$quote5 = $tbc_controller->get5($_POST['id_title_bible_quote5']);

	if (empty($quote5)) {
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

		printf($template, $_POST['id_title_bible_quote5']);
	} else {
		$template_quote5 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="id_title_bible_quote5" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-quote5">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_quote5,
			$quote5[0]['title_bible_quote5'],
			$quote5[0]['id_title_bible_quote5']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-quote5'   && $_POST['crud'] == 'del') {

	$quote5 = $tbc_controller->del5($_POST['id_title_bible_quote5']);

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

	printf($template, $_POST['id_title_bible_quote5']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}