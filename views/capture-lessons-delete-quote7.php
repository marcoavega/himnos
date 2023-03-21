<?php
$tbc_controller = new  TitlesBiblesQuotesController();

if ($_POST['r'] == 'capture-lessons-delete-quote7'   && !isset($_POST['crud'])) {

    $quote7 = $tbc_controller->get7($_POST['id_title_bible_quote7']);

    if (empty($quote7)) {
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

        printf($template, $_POST['id_title_bible_quote7']);
    } else {
        $template_quote7 = '
			<h2 class="">Eliminar pregunta</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar pregunta: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="id_title_bible_quote7" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-quote7">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

        printf(
            $template_quote7,
            $quote7[0]['title_bible_quote7'],
            $quote7[0]['id_title_bible_quote7']
        );
    }
} else if ($_POST['r'] == 'capture-lessons-delete-quote7'   && $_POST['crud'] == 'del') {

    $quote7 = $tbc_controller->del7($_POST['id_title_bible_quote7']);

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

    printf($template, $_POST['id_title_bible_quote7']);
} else {
    $controller = new ViewController();
    $controller->load_view('error401');
}