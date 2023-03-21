<?php
$tvc_controller = new TitlesVersesController();

if ($_POST['r'] == 'capture-lessons-delete-title_verse'   && !isset($_POST['crud'])) {

    $title_verse = $tvc_controller->get($_POST['title_verse']);

    if (empty($title_verse)) {
        $template = '
			<div class="container">
				<p class="item  error">No existe el título del verso <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

        printf($template, $_POST['title_verse']);
    } else {
        $template_title_verse = '
			<h2 class="">Eliminar título de verso</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar el título de verso: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="title_verse" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-title_verse">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

        printf(
            $template_title_verse,
            $title_verse[0]['title_verse'],
            $title_verse[0]['title_verse']
        );
    }
} else if ($_POST['r'] == 'capture-lessons-delete-title_verse'   && $_POST['crud'] == 'del') {

    $title_verse = $tvc_controller->del($_POST['title_verse']);

    $template = '
		<div class="container">
			<p class="item  delete">Título de verso <b>%s</b> eliminado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

    printf($template, $_POST['title_verse']);
} else {
    $controller = new ViewController();
    $controller->load_view('error401');
}