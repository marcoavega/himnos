<?php
if ($_POST['r'] == 'lessons-show' && isset($_POST['trimester_title'])) {

	$ls_controller = new LessonsController();

	$ls = $ls_controller->getlesson($_POST['trimester_title']);

	if (empty($ls)) {
		printf('
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
			<h3 class="centrartexto padding-versiculo">No hay lección de %s</h3>
		</form>
	</div>
</div>
<script>
	window.onload = function (){
		reloadPage("lessons")
	}
</script>
', $_POST['trimester_title']);
	} else {

		print('<div class="container-fluid list div-himnos"><h2 class="p1">Seleccionar lección</h2></div>');

		$template_ls = '
		<div class="home container">
				';



		for ($n = 0; $n < count($ls); $n++) {
			$template_ls .= '
			<div class="card col-sm-12 col-md-4 list" ">

		<img src="..." class="card-img-top" alt="...">

		<div class="card-body">
		<h5 class="card-text">' . $ls[$n]['name_lesson'] . '.</h5>
		<h5 class="card-title">' . $ls[$n]['trimester_title'] . '</h5>
		<p class="card-text">' . $ls[$n]['date'] . '.</p>
		  
					<form method="POST">
						<input type="hidden" name="r" value="lesson-show">
						<input type="hidden" name="id_lesson" value="' . $ls[$n]['id_lesson'] . '">
						<input class="btn btn-outline-dark col-sm-12 col-md-6 hymn particle" type="submit" value="Mostrar lección">
					</form>

		</div>

	  </div>	
		
			';
		}

		$template_ls .= '
		<div class="container row button-return">
	
		<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle" type="button" value="Regresar" onclick="history.back()">

</div>


		</div>
		';

		print($template_ls);
	}
} else {
	$controller = new ViewController();
	$controller->load_view('error404');
}