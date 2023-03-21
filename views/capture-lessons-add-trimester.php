<?php
if ($_POST['r'] == 'capture-lessons-add-trimester' && !isset($_POST['crud'])) {

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

<div class="container-fluid list div-himnos"><h2 class="p1">Agregar trimestre</h2></div>
<div class="container">

	<form method="POST" class="">
	<div class="form-group">
			<div class="">
				<input type="hidden" name="id_trimester" value="0">
			</div>
			<div class="">
				<input class="form-control" type="text" name="trimester_number" placeholder="Número trimestre" required>
			</div>
            <div class="">
				<input class="form-control" type="text" name="trimester_title" placeholder="Título trimestre" required>
			</div>
			<div class="">
				<select class="custom-select" name="year" placeholder="year" required>
					<option value="">Año</option>
					%s
				</select>
			</div>
			<div class="">
				<input class="btn btn-outline-dark col-sm-12 col-md-3 hymn particle marginq" type="submit" value="Agregar">
				<input type="hidden" name="r" value="capture-lessons-add-trimester">
				<input type="hidden" name="crud" value="set">
			</div>
		</div>	
		</form>

		</div>
		</div>

	', $year_select);
} else if ($_POST['r'] == 'capture-lessons-add-trimester' && $_POST['crud'] == 'set') {
	$tm_controller = new TrimestersController();

	$new_tm = array(
		'id_trimester' =>  $_POST['id_trimester'],
		'trimester_number' =>  $_POST['trimester_number'],
		'trimester_title' =>  $_POST['trimester_title'],
		'year' =>  $_POST['year']
	);

	$tm = $tm_controller->set($new_tm);

	$template = '
		<div class="container">
			<p class="item  add">Trimestre <b>%s</b> salvado</p>
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