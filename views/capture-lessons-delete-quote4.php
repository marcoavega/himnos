<?php
$tbc_controller = new  TitlesBiblesQuotesController();

if ($_POST['r'] == 'capture-lessons-delete-quote4'   && !isset($_POST['crud'])) {

	$quote4 = $tbc_controller->get4($_POST['id_title_bible_quote4']);

	if (empty($quote4)) {
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

		printf($template, $_POST['id_title_bible_quote4']);
	} else {
		$template_quote4 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="id_title_bible_quote4" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-quote4">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_quote4,
			$quote4[0]['title_bible_quote4'],
			$quote4[0]['id_title_bible_quote4']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-quote4'   && $_POST['crud'] == 'del') {

	$quote4 = $tbc_controller->del4($_POST['id_title_bible_quote4']);

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

	printf($template, $_POST['id_title_bible_quote4']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
