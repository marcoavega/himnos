<?php
$years_controller = new YearsController();

if ($_POST['r'] == 'capture-lessons-delete-year'   && !isset($_POST['crud'])) {

	$year = $years_controller->get($_POST['year']);

	if (empty($year)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe el año <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['year']);
	} else {
		$template_year = '
		
<div class="container-fluid list div-himnos"><h2 class="p1">Eliminar año</h2></div>

<div class="container">
		
		<div class="col-md-12 home">

			<form method="POST" class="">
				
			<h3 class="centrartexto padding-versiculo">¿Estas seguro de eliminar el año: %s ?</h3>


				<div class="">
					<input class="button  delete btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="submit" value="SI">
					<input class="button  add btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="year" value="%s">
					<input type="hidden" name="r" value="capture-lessons-delete-year">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>

	</div>
</div>			
		';

		printf(
			$template_year,
			$year[0]['year'],
			$year[0]['year']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-year'   && $_POST['crud'] == 'del') {

	$year = $years_controller->del($_POST['year']);

	$template = '
		<div class="container">
			<p class="item  delete">Año <b>%s</b> eliminado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['year']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}