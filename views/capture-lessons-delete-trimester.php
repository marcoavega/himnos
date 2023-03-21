<?php
$trimesters_controller = new TrimestersController();

if ($_POST['r'] == 'capture-lessons-delete-trimester'   && !isset($_POST['crud'])) {

	$trimester = $trimesters_controller->get($_POST['trimester_title']);

	if (empty($trimester)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe el trimestre <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['trimester']);
	} else {
		$template_trimester = '

		<div class="container-fluid list div-himnos"><h2 class="p1">Eliminar trimestre</h2></div>

		<div class="container">
				
				<div class="col-md-12 home">
		
					<form method="POST" class="">
						
					<h3 class="centrartexto padding-versiculo">¿Estas seguro de eliminar el trimestre: %s ?</h3>
		
		
						<div class="">
							<input class="button  delete btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="submit" value="SI">
							<input class="button  add btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="button" value="NO" onclick="history.back()">
							<input type="hidden" name="trimester_title" value="%s">
							<input type="hidden" name="r" value="capture-lessons-delete-trimester">
							<input type="hidden" name="crud" value="del">
						</div>
					</form>
		
			</div>
		</div>			



			
		';

		printf(
			$template_trimester,
			$trimester[0]['trimester_title'],
			$trimester[0]['trimester_title']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-trimester'   && $_POST['crud'] == 'del') {

	$trimester = $trimesters_controller->del($_POST['trimester_title']);

	$template = '
		<div class="container">
			<p class="item  delete">Trimestre <b>%s</b> eliminado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['trimester_title']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}