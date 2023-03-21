<?php
$cc_controller = new CommentsController();

if ($_POST['r'] == 'capture-lessons-delete-comment'   && !isset($_POST['crud'])) {

	$comment = $cc_controller->get($_POST['comment']);

	if (empty($comment)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe el comentario <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['comment']);
	} else {
		$template_comment = '
			<h2 class="">Eliminar comentario</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar el comentario: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="comment" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-comment">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_comment,
			$comment[0]['comment'],
			$comment[0]['comment']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-comment'   && $_POST['crud'] == 'del') {

	$comment = $cc_controller->del($_POST['comment']);

	$template = '
		<div class="container">
			<p class="item  delete">Comentario <b>%s</b> eliminado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['comment']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}