<?php
$dates_controller = new DatesController();

if ($_POST['r'] == 'capture-lessons-delete-date'   && !isset($_POST['crud'])) {

	$date = $dates_controller->get($_POST['date']);

	if (empty($date)) {
		$template = '
			<div class="container">
				<p class="item  error">No existe la fecha <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['date']);
	} else {
		$template_date = '


		<div class="container-fluid list div-himnos"><h2 class="p1">Eliminar fecha</h2></div>

		<div class="container">
				
				<div class="col-md-12 home">
		
					<form method="POST" class="">
						
					<h3 class="centrartexto padding-versiculo">¿Estas seguro de eliminar la fecha: %s ?</h3>
		
		
						<div class="">
							<input class="button  delete btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="submit" value="SI">
							<input class="button  add btn btn-outline-dark col-sm-12 hymn particle marginq col-md-2" type="button" value="NO" onclick="history.back()">
							<input type="hidden" name="date" value="%s">
							<input type="hidden" name="r" value="capture-lessons-delete-date">
							<input type="hidden" name="crud" value="del">
						</div>
					</form>
		
			</div>
		</div>			


			
		';

		printf(
			$template_date,
			$date[0]['date'],
			$date[0]['date']
		);
	}
} else if ($_POST['r'] == 'capture-lessons-delete-date'   && $_POST['crud'] == 'del') {

	$date = $dates_controller->del($_POST['date']);

	$template = '
		<div class="container">
			<p class="item  delete">Fecha <b>%s</b> eliminado</p>
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
