<?php
if ($_POST['r'] == 'capture-lessons-add-date'   && !isset($_POST['crud'])) {

	$year_controller = new YearsController();
	$year = $year_controller->get();
	$year_select = '';
	for ($n = 0; $n < count($year); $n++) {
		$year_select .= '<option value="' . $year[$n]['id_year'] . '">' . $year[$n]['year'] . '</option>';
	}

	printf('
	<div class="row container">
	<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
</div>

<div class="container-fluid list div-himnos"><h2 class="p1">Agregar fecha</h2></div>
<div class="container">

		<form method="POST" class="">
		<div class="form-group">
			<div class="">
				<input type="hidden" name="id_date" value="0">
			</div>
			<div class="form-group row">
			<label for="example-date-input" class="col-2 col-form-label">Fecha</label>
			<div class="col-10">
			  <input class="form-control" type="date" id="example-date-input" name="date" >
			</div>
		  </div>
			<div class="">
				<select class="custom-select" name="year" placeholder="year" required>
					<option value="">Año</option>
					%s
				</select>
			</div>
			<div class="">
				<input class="btn btn-outline-dark col-sm-12 col-md-3 hymn particle marginq" type="submit" value="Agregar">
				<input type="hidden" name="r" value="capture-lessons-add-date">
				<input type="hidden" name="crud" value="set">
			</div>
		</div>
		</form>

		</div>
		</div>
	', $year_select);
} else if ($_POST['r'] == 'capture-lessons-add-date'   && $_POST['crud'] == 'set') {
	$dt_controller = new DatesController();

	$new_dt = array(
		'id_date' =>  $_POST['id_date'],
		'date' =>  $_POST['date'],
		'year' =>  $_POST['year']
	);

	$dt = $dt_controller->set($new_dt);

	$template = '
		<div class="container">
			<p class="item  add">Fecha <b>%s</b> salvada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['date']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}