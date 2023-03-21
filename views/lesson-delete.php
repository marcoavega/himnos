<?php
$lc_controller = new LessonsController();

if ($_POST['r'] == 'lesson-delete'   && !isset($_POST['crud'])) {

	$lc = $lc_controller->get($_POST['trimester_title']);

	if (empty($lc)) {
		$template = '
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
			<h3 class="centrartexto padding-versiculo">No existe la lección %s</h3>
		</form>
	</div>
</div>
			<script>
				window.onload = function (){
					reloadPage("lessons")
				}
			</script>
		';

		printf($template, $_POST['trimester_title']);
	} else {

		print('<div class="container-fluid list div-himnos"><h2 class="p1">Eliminar lección</h2></div>');

		$template_lc = '
		<div class="container">
		
		<div class="col-md-12 home">

			<form method="POST" class="">
				
				<h3 class="centrartexto padding-versiculo">¿Estas seguro de eliminar la lección: %s ?</h3>
					
	
				<div class="">
					<input class="button  delete btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="submit" value="SI">
					<input class="button  add btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="id_lesson" value="%s">
					<input type="hidden" name="trimester_title" value="%s">
					<input type="hidden" name="r" value="lesson-delete">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>

		</div>
		</div>
		';

		printf(
			$template_lc,
			$lc[0]['trimester_title'],
			$lc[0]['id_lesson'],
			$lc[0]['trimester_title']
		);
	}
} else if ($_POST['r'] == 'lesson-delete'   && $_POST['crud'] == 'del') {

	$lc = $lc_controller->del($_POST['id_lesson']);

	$template = '
		<div class="">
			<p class="">Leccióm <b>%s</b> eliminada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("lessons")
			}
		</script>
	';

	printf($template, $_POST['trimester_title']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
