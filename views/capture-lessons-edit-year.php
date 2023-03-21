<?php
$years_controller = new YearsController();

if ($_POST['r'] == 'capture-lessons-edit-year'   && !isset($_POST['crud'])) {

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
		<div class="row container">
		<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
	</div>
	
	<div class="container">
	
	<div class="col-md-12">

			<h2 class="">Editar año</h2>
			<form method="POST" class="">
			<div class="form-group">
				<div class="">
					<input type="hidden" placeholder="Id" value="%s" disabled required>
					<input type="hidden" name="id_year" value="%s">
				</div>
				<div class="">
					<input class="form-control" type="text" name="year" placeholder="year" value="%s" required>
				</div>
				<div class="p_25">
					<input class="btn btn-outline-dark col-sm-12 col-md-3 hymn particle marginq" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-year">
					<input type="hidden" name="crud" value="set">
				</div>
			</div>
			</form>

		</div>
		</div>
		';

		printf(
			$template_year,
			$year[0]['id_year'],
			$year[0]['id_year'],
			$year[0]['year'],
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-year'   && $_POST['crud'] == 'set') {

	$save_year = array(
		'id_year' =>  $_POST['id_year'],
		'year' =>  $_POST['year'],
	);

	$year = $years_controller->set($save_year);

	$template = '
		<div class="container">
			<p class="item  edit">Año <b>%s</b> salvado</p>
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