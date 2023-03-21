<?php

$ls_controller = new LessonsController();
$ls = $ls_controller->gettrim();

if (empty($ls)) {
	print('
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
			<h3 class="centrartexto padding-versiculo">No hay lecciones.</h3>
		</form>
	</div>
</div>
<script>
	window.onload = function (){
		reloadPage("lessons")
	}
</script>
');
} else {

	print('<div class="container-fluid list div-himnos"><h2 class="p1">Seleccionar trimestre</h2></div>');

	$template_ls = '
	<div class="home container">
			';

	for ($n = 0; $n < count($ls); $n++) {
		$template_ls .= '

		<div class="card col-sm-12 list" style="width: 18rem;">

		<img src="..." class="card-img-top" alt="...">

		<div class="card-body">
		
		  <h5 class="card-title">' . $ls[$n]['trimester_title'] . '</h5>
		  <p class="card-text">' . $ls[$n]['year'] . '.</p>
		  
					<form method="POST">
						<input type="hidden" name="r" value="lessons-show">
						<input type="hidden" name="trimester_title" value="' . $ls[$n]['trimester_title'] . '">
						<input class="btn btn-outline-dark col-sm-12 col-md-6 hymn particle" type="submit" value="Mostrar">
					</form>
				
				
					<form method="POST">
						<input type="hidden" name="r" value="lesson-edit">
						<input type="hidden" name="trimester_title" value="' . $ls[$n]['trimester_title'] . '">
						<input class="btn btn-outline-dark col-sm-12 col-md-6 hymn particle" type="submit" value="Editar">
					</form>
				
			
					<form method="POST">
						<input type="hidden" name="r" value="lesson-delete">
						<input type="hidden" name="trimester_title" value="' . $ls[$n]['trimester_title'] . '">
						<input class="btn btn-outline-dark col-sm-12 col-md-6 hymn particle" type="submit" value="Eliminar">
					</form>
				
		</div>

	  </div>
		
			
		';
	}

	$template_ls .= '
	<div class="container row">
	
				<form class="justify-content-center" method="POST">
					<input type="hidden" name="r" value="lesson-add">
					<h2 class="p1 col-md-12">Agregar lección</h2>
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle" type="submit" value="Agregar">
				</form>

	</div>

	</div>
	';

	print($template_ls);
}