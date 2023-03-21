<?php
if ($_POST['r'] == 'capture-lessons-add-year'   && !isset($_POST['crud'])) {
	print('

	<div class="row container">
	<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
</div>

<div class="container-fluid list div-himnos"><h2 class="p1">Agregar Año</h2></div>

<div class="container">
	
	<div class="col-md-12">

		<form method="POST" class="">
		<div class="form-group">
			<div class="">
				<input type="hidden" name="id_year" value="0">
			</div>
			<div class="">
				<input class="form-control" type="text" name="year" placeholder="Año" required>
			</div>
			<div class="">
				<input class="btn btn-outline-dark col-sm-12 col-md-3 hymn particle marginq" type="submit" value="Agregar">
				<input type="hidden" name="r" value="capture-lessons-add-year">
				<input type="hidden" name="crud" value="set">
			</div>
		</div>
		</form>

	</div>
</div>
	');
} else if ($_POST['r'] == 'capture-lessons-add-year'   && $_POST['crud'] == 'set') {
	$years_controller = new YearsController();

	$new_year = array(
		'id_year' => $_POST['id_year'],
		'year' =>  $_POST['year'],
	);

	$year = $years_controller->set($new_year);

	$template = '
		<div class="">
			<p class="">Id <b>%s</b> salvado</p>
			<p class="">Year <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['id_year'], $_POST['year']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
