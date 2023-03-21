<?php
$dt_controller = new DatesController();

if ($_POST['r'] == 'capture-lessons-edit-date'   && !isset($_POST['crud'])) {

	$dt = $dt_controller->get($_POST['date']);

	if (empty($dt)) {
		$template = '
			<div class="">
				<p class="">No existe la fecha <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['date']);
	} else {

		$year_controller = new YearsController();
		$year = $year_controller->get();
		$year_select = '';
		for ($a = 0; $a < count($year); $a++) {
			$selected = ($dt[0]['year'] == $year[$a]['year']) ? 'selected' : '';
			$year_select .= '<option value="' . $year[$a]['id_year'] . '"' . $selected . '>' . $year[$a]['year'] . '</option>';
		}

		$template_dt = '

		<div class="row container">
			<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
		</div>

		<div class="container">
		<div class="col-md-12">

			<h2 class="">Editar fecha</h2>
			<form method="POST" class="">

				<div class="">
					<input type="text" placeholder="id_date" value="%s" class="form-control"  disabled required>
					<input type="hidden" name="id_date" value="%s">
				</div>

				<div class="">
					<input type="date" name="date" placeholder="Fecha" value="%s" class="form-control"  required>
				</div>

				<div class="">
					<select name="year" placeholder="year" class="form-control"  required>
						<option value="">year</option>
						%s
					</select>
				</div>

				<div class="">
					<input  class="btn btn-outline-dark col-sm-12 col-md-3 hymn particle marginq" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-date">
					<input type="hidden" name="crud" value="set">
				</div>

			</form>

			</div>
		</div>

		';

		printf(
			$template_dt,
			$dt[0]['id_date'],
			$dt[0]['id_date'],
			$dt[0]['date'],
			$year_select,
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-date'   && $_POST['crud'] == 'set') {

	$save_dt = array(
		'id_date' =>  $_POST['id_date'],
		'date_number' =>  $_POST['date'],
		'year' =>  $_POST['year'],
	);

	$dt = $dt_controller->set($save_dt);

	$template = '
		<div class="container">
			<p class="item  edit">Fecha <b>%s</b> salvada</p>
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