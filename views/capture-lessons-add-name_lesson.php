<?php
if ($_POST['r'] == 'capture-lessons-add-name_lesson'   && !isset($_POST['crud'])) {

	$date_controller = new DatesController();
	$date = $date_controller->get();
	$date_select = '';
	for ($n = 0; $n < count($date); $n++) {
		$date_select .= '<option value="' . $date[$n]['date'] . '">' . $date[$n]['date'] . '</option>';
	}

	printf('
	<div class="row container">
	<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
</div>

<div class="container-fluid list div-himnos"><h2 class="p1">título de leccion</h2></div>
<div class="container">

		<form method="POST" class="">
		<div class="form-group">
			<div class="">
				<input type="hidden" name="id_lesson_title" value="0">
			</div>
			<div class="">
				<input class="form-control" type="text" name="name_lesson" placeholder="Nombre de leccion" required>
			</div>
			<div class="">
				<select class="custom-select" name="date" placeholder="date" required>
					<option value="">Fecha</option>
					%s
				</select>
			</div>
			<div class="">
				<input class="btn btn-outline-dark col-sm-12 col-md-3 hymn particle marginq" type="submit" value="Agregar">
				<input type="hidden" name="r" value="capture-lessons-add-name_lesson">
				<input type="hidden" name="crud" value="set">
			</div>
		</div>
		</form>

		</div>
		</div>
	', $date_select);
} else if ($_POST['r'] == 'capture-lessons-add-name_lesson'   && $_POST['crud'] == 'set') {
	$lt_controller = new LessonsTitlesController();

	$new_lt = array(
		'id_lesson_title' =>  $_POST['id_lesson_title'],
		'name_lesson' =>  $_POST['name_lesson'],
		'date' =>  $_POST['date']
	);

	$lt = $lt_controller->set($new_lt);

	$template = '
		<div class="container">
			<p class="item  add">Nombre de lección <b>%s</b> salvada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf(
		$template,
		$_POST['name_lesson'],
	);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
