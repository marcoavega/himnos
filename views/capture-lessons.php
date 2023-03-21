<?php
print('
<div class="row container">
<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
</div>

<div class="centrartexto tituloh4">
<h2 class="list2 padding2">captura de lecciones.</h2>
</div>

<div class="col-md-12 list">
	<div class="nav justify-content-center nav-pills nav-div list" id="v-pills-tab" role="tablist"
	aria-orientation="vertical">
		<a class="nav-link active  btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9"
		role="tab" aria-controls="v-pills-9" aria-selected="true">GESTIÓN DE AÑOS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab"
		aria-controls="v-pills-10" aria-selected="false">GESTIÓN DE TRIMESTRES</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab"
		aria-controls="v-pills-11" aria-selected="false">GESTIÓN DE FECHAS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab"
		aria-controls="v-pills-12" aria-selected="false">GESTIÓN DE TÍTULOS DE LECCIONES</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-13-tab" data-toggle="pill" href="#v-pills-13" role="tab"
		aria-controls="v-pills-13" aria-selected="false">GESTIÓN DE OBJETIVOS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-14-tab" data-toggle="pill" href="#v-pills-14" role="tab"
		aria-controls="v-pills-14" aria-selected="false">GESTIÓN DE TÍTULOS DE VERSOS A MEMORIZAR</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-15-tab" data-toggle="pill" href="#v-pills-15" role="tab"
		aria-controls="v-pills-15" aria-selected="false">GESTIÓN DE TEXTO DE VERSOS A MEMORIZAR</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-16-tab" data-toggle="pill" href="#v-pills-16" role="tab"
		aria-controls="v-pills-16" aria-selected="false">GESTIÓN DE COMENTARIOS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-17-tab" data-toggle="pill" href="#v-pills-17" role="tab"
		aria-controls="v-pills-17" aria-selected="false">GESTIÓN DE TÍTULOS DE LECTURAS BIBLICAS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-18-tab" data-toggle="pill" href="#v-pills-18" role="tab"
		aria-controls="v-pills-18" aria-selected="false">GESTIÓN DE LECTURAS BIBLICAS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-19-tab" data-toggle="pill" href="#v-pills-19" role="tab"
		aria-controls="v-pills-19" aria-selected="false">GESTIÓN DE PREGUNTAS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-20-tab" data-toggle="pill" href="#v-pills-20" role="tab"
		aria-controls="v-pills-20" aria-selected="false">GESTIÓN DE TÍTULOS DE PREGUNTAS</a>
		<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-21-tab" data-toggle="pill" href="#v-pills-21" role="tab"
		aria-controls="v-pills-21" aria-selected="false">GESTIÓN DE CITAS DE PREGUNTAS</a>
	</div>
</div>

');

$year_controller = new YearsController();
$year = $year_controller->get();

if (empty($year)) {
	
	print('
	
	<div class="col-md-12">

	<div class="tab-content" id="v-pills-tabContent">

	<div class="tab-pane fade show active col-md-12" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">

	<h2 class="p1">GESTIÓN DE AÑOS</h2>
	
	');

	$template_year = '
	<div class="container backgroundtable" >          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
			<th>
				<h5>
		  			<form method="POST">
		  				<input type="hidden" name="r" value="capture-lessons-add-year">
		  				<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq " type="submit" value="Agregar año">
	  				</form>
				</h5>
			</th>
		</tr>
	  </thead>
	  <tbody>
	  ';

	$template_year .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_year);

} else {

	print('
	
	<div class="col-md-12">

	<div class="tab-content" id="v-pills-tabContent">

	<div class="tab-pane fade show active col-md-12" id="v-pills-9" role="tabpanel"
						aria-labelledby="v-pills-9-tab">

	<h2 class="p1">GESTIÓN DE AÑOS</h2>');
	$template_year = '
	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id year</h5></th>
		  <th><h5>Year</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  	<form method="POST">
		  		<input type="hidden" name="r" value="capture-lessons-add-year">
		  		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar año">
	  		</form></h5></th>
		</tr>
	  </thead>
	  <tbody>
	  ';

	for ($n = 0; $n < count($year); $n++) {
		$template_year .= '
		<tr>
        <td>' . $year[$n]['id_year'] . '</td>
        <td>' . $year[$n]['year'] . '</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-year">
		<input type="hidden" name="year" value="' . $year[$n]['year'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
	</form></td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-year">
		<input type="hidden" name="year" value="' . $year[$n]['year'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
	</form></td>
		<td></td>
      </tr>

		';
	}

	$template_year .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_year);
}

/**-------------------------------------------------------------------- */

$trimester_controller = new TrimestersController();
$trimester = $trimester_controller->get();

if (empty($trimester)) {
	print('
		
	<div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">

	<h2 class="p1">GESTIÓN DE TRIMESTRES</h2>'

);

	$template_trimester = '
	<div class="container backgroundtable">          
	
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  
	<thead>

		<tr>
			<th>
				<h5>
					<form method="POST">
						<input type="hidden" name="r" value="capture-lessons-add-trimester">
						<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar trimestre">
					</form>
				</h5>
			</th>
		</tr>

	</thead>
	<tbody>

	';

	$template_trimester .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_trimester);

} else {
	print('
	
	<div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">

	<h2 class="p1">GESTIÓN DE TRIMESTRES</h2>');

	$template_trimester = '
	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id trimestre</h5></th>
		  <th><h5>Título de trimestre</h5></th>
		  <th><h5>Año</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-trimester">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar trimestre">
	  </form>
	  </h5>
	  </th>
		</tr>
	  </thead>
	  <tbody>

	';

	for ($n = 0; $n < count($trimester); $n++) {
		$template_trimester .= '
		<tr>
        <td>' . $trimester[$n]['id_trimester'] . '</td>
		<td>' . $trimester[$n]['trimester_title'] . '</td>
		<td>' . $trimester[$n]['year'] . '</td>
        <td>
		<form method="POST">
					<input type="hidden" name="r" value="capture-lessons-edit-trimester">
					<input type="hidden" name="trimester_title" value="' . $trimester[$n]['trimester_title'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-trimester">
		<input type="hidden" name="trimester_title" value="' . $trimester[$n]['trimester_title'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_trimester .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_trimester);
}
/**-------------------------------------------------------------------- */

$date_controller = new DatesController();
$date = $date_controller->get();

if (empty($date)) {
	
	print('
		
	<div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">

	<h2 class="p1">GESTIÓN DE FECHAS</h2>');

	$template_date = '
	<div class="container backgroundtable">        
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
			<th>
				<h5>
		  			<form method="POST">
		  				<input type="hidden" name="r" value="capture-lessons-add-date">
		  				<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar fecha">
	  				</form>
	  			</h5>
	  		</th>
		</tr>
	  </thead>
	  <tbody>

	';

	$template_date .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_date);




} else {
	$template_date = '

	<div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">

	<h2 class="p1">GESTIÓN DE FECHAS</h2>

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id fecha</h5></th>
		  <th><h5>Fecha</h5></th>
		  <th><h5>Año</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-date">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>
';

	for ($n = 0; $n < count($date); $n++) {
		$template_date .= '
		<tr>
        <td>' . $date[$n]['id_date'] . '</td>
		<td>' . $date[$n]['date'] . '</td>
		<td>' . $date[$n]['year'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-date">
		<input type="hidden" name="date" value="' . $date[$n]['date'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-date">
					<input type="hidden" name="date" value="' . $date[$n]['date'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_date .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_date);
}
/**--------------------------------------------------------------------**/

$lessons_title_controller = new LessonsTitlesController();
$name_lesson = $lessons_title_controller->get();

if (empty($name_lesson)) {

	print('

	<div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">

	<h2 class="p1">GESTIÓN DE TÍTULOS DE LECCIONES</h2> 
	
	');
	
	$template_name_lesson = '

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		<th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-name_lesson">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>
	';

	$template_name_lesson .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_name_lesson);
	
} else {
	$template_name_lesson = '

	<div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">

	<h2 class="p1">GESTIÓN DE TÍTULOS DE LECCIONES</h2>
	
	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id título de leccion</h5></th>
		  <th><h5>Nombre de lección</h5></th>
		  <th><h5>Fecha</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-name_lesson">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>
	';

	for ($n = 0; $n < count($name_lesson); $n++) {
		$template_name_lesson .= '
		<tr>
        <td>' . $name_lesson[$n]['id_lesson_title'] . '</td>
		<td>' . $name_lesson[$n]['name_lesson'] . '</td>
		<td>' . $name_lesson[$n]['date'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-name_lesson">
					<input type="hidden" name="name_lesson" value="' . $name_lesson[$n]['name_lesson'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-name_lesson">
					<input type="hidden" name="name_lesson" value="' . $name_lesson[$n]['name_lesson'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_name_lesson .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_name_lesson);
}

/**-------------------------------------------------------------------- */

$objectives_controller = new ObjectivesController();
$objective = $objectives_controller->get();

if (empty($objective)) {

	print('
	
		<div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">

		<h2 class="p1">GESTIÓN DE OBJETIVOS</h2>

	');

	$template_objective = '

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		<th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-objective">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>
';

	$template_objective .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_objective);

} else {
	$template_objective = '

	<div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">

	<h2 class="p1">GESTIÓN DE OBJETIVOS</h2>

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id título de objectivos</h5></th>
		  <th><h5>Objetivo</h5></th>
		  <th><h5>Nombre de lección</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-objective">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>
';

	for ($n = 0; $n < count($objective); $n++) {
		$template_objective .= '
		<tr>
        <td>' . $objective[$n]['id_objective'] . '</td>
		<td>' . $objective[$n]['objective'] . '</td>
		<td>' . $objective[$n]['name_lesson'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-objective">
					<input type="hidden" name="objective" value="' . $objective[$n]['objective'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-objective">
					<input type="hidden" name="objective" value="' . $objective[$n]['objective'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_objective .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_objective);
}

/**-------------------------------------------------------------------- */

$title_verses_controller = new TitlesVersesController();
$title_verse = $title_verses_controller->get();

if (empty($title_verse)) {

	print('
	
		<div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">

		<h2 class="p1">GESTIÓN DE TÍTULOS DE VERSOS A MEMORIZAR</h2>

	');

	$template_title_verse = '
	
	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		<th><h5>
		<form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-title_verse">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
		</form>
		</th></h5>
		</tr>
	  </thead>
	  <tbody>

	  ';

	$template_title_verse .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_title_verse);
} else {

	$template_title_verse = '

	<div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">

	<h2 class="p1">GESTIÓN DE TÍTULOS DE VERSOS A MEMORIZAR</h2>

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id título de verso</h5></th>
		  <th><h5>Titulo de verso Verso</h5></th>
		  <th><h5>Nombre de lección</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-title_verse">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

	  ';

	for ($n = 0; $n < count($title_verse); $n++) {
		$template_title_verse .= '
		<tr>
        <td>' . $title_verse[$n]['id_verse'] . '</td>
		<td>' . $title_verse[$n]['title_verse'] . '</td>
		<td>' . $title_verse[$n]['name_lesson'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-title_verse">
					<input type="hidden" name="title_verse" value="' . $title_verse[$n]['title_verse'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-title_verse">
					<input type="hidden" name="title_verse" value="' . $title_verse[$n]['title_verse'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_title_verse .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_title_verse);
}

/**-------------------------------------------------------------------- */

$verse_text_controller = new TextVersesController();
$verse_text = $verse_text_controller->get();

if (empty($verse_text)) {

	print('
	
		<div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">

		<h2 class="p1">GESTIÓN DE TEXTO DE VERSOS A MEMORIZAR</h2>

	');

	$template_verse_text = '

	<div class="container backgroundtable">   
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		<th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-verse_text">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	$template_verse_text .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_verse_text);

} else {
	$template_verse_text = '

	<div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">

	<h2 class="p1">GESTIÓN DE TEXTO DE VERSOS A MEMORIZAR</h2>

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id de texto de verso</h5></th>
		  <th><h5>Texto de verso a memorizar</h5></th>
		  <th><h5>Nombre de lección</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-verse_text">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	for ($n = 0; $n < count($verse_text); $n++) {
		$template_verse_text .= '
		<tr>
        <td>' . $verse_text[$n]['id_verses_text'] . '</td>
		<td>' . $verse_text[$n]['verse_text'] . '</td>
		<td>' . $verse_text[$n]['name_lesson'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-verse_text">
					<input type="hidden" name="verse_text" value="' . $verse_text[$n]['verse_text'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-verse_text">
					<input type="hidden" name="verse_text" value="' . $verse_text[$n]['verse_text'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_verse_text .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_verse_text);
}

/**-------------------------------------------------------------------- */

$comment_controller = new CommentsController();
$comment = $comment_controller->get();

if (empty($comment)) {

	print('
	
		<div class="tab-pane fade" id="v-pills-16" role="tabpanel" aria-labelledby="v-pills-16-tab">

		<h2 class="p1">GESTIÓN DE COMENTARIOS</h2>
	
	');

	$template_comment = '

	<div class="container backgroundtable">    
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		<th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-comment">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	$template_comment .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_comment);

} else {
	$template_comment = '

	<div class="tab-pane fade" id="v-pills-16" role="tabpanel" aria-labelledby="v-pills-16-tab">

	<h2 class="p1">GESTIÓN DE COMENTARIOS</h2>

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id de comentario</h5></th>
		  <th><h5>Comentario</h5></th>
		  <th><h5>Nombre de lección</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-comment">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	for ($n = 0; $n < count($comment); $n++) {
		$template_comment .= '
		<tr>
        <td>' . $comment[$n]['id_comment'] . '</td>
		<td><h5 class="text-justify padding particle">' . $comment[$n]['comment'] . '</h5></td>
		<td>' . $comment[$n]['name_lesson'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-comment">
					<input type="hidden" name="comment" value="' . $comment[$n]['comment'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-comment">
					<input type="hidden" name="comment" value="' . $comment[$n]['comment'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_comment .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_comment);
}

/**-------------------------------------------------------------------- */

$bibles_readings_controller = new BiblesReadingsController();
$bible_reading = $bibles_readings_controller->get();

if (empty($bible_reading)) {
	print('

		<div class="tab-pane fade" id="v-pills-17" role="tabpanel" aria-labelledby="v-pills-17-tab">

		<h2 class="p1">GESTIÓN DE TÍTULOS DE LECTURAS BIBLICAS</h2>

	');

	$template_bible_reading = '

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		<th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-bible_reading">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	$template_bible_reading .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_bible_reading);

} else {
	$template_bible_reading = '

	<div class="tab-pane fade" id="v-pills-17" role="tabpanel" aria-labelledby="v-pills-17-tab">

	<h2 class="p1">GESTIÓN DE TÍTULOS DE LECTURAS BIBLICAS</h2>

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id lectura bíblica</h5></th>
		  <th><h5>Lectura bíblica</h5></th>
		  <th><h5>Nombre de lección</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-bible_reading">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	for ($n = 0; $n < count($bible_reading); $n++) {
		$template_bible_reading .= '
		<tr>
        <td>' . $bible_reading[$n]['id_bibles_reading'] . '</td>
		<td>' . $bible_reading[$n]['title_reading'] . '</td>
		<td>' . $bible_reading[$n]['name_lesson'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-bible_reading">
					<input type="hidden" name="title_reading" value="' . $bible_reading[$n]['title_reading'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-bible_reading">
					<input type="hidden" name="title_reading" value="' . $bible_reading[$n]['title_reading'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_bible_reading .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_bible_reading);
}

/**-------------------------------------------------------------------- */

$bibles_readings_text_controller = new BiblesReadingsTextController();
$bible_reading_text = $bibles_readings_text_controller->get();

if (empty($bible_reading_text)) {
	print('
		
		<div class="tab-pane fade" id="v-pills-18" role="tabpanel" aria-labelledby="v-pills-18-tab">

		<h2 class="p1">GESTIÓN DE LECTURAS BIBLICAS</h2>

	');

	$template_bible_reading_text = '

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		<th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-bible_reading_text">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	$template_bible_reading_text .= '

	</tbody>
	</table>
  </div>

  </div>
  
	';

	print($template_bible_reading_text);



} else {
	$template_bible_reading_text = '

	<div class="tab-pane fade" id="v-pills-18" role="tabpanel" aria-labelledby="v-pills-18-tab">

	<h2 class="p1">GESTIÓN DE LECTURAS BIBLICAS</h2>
	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>Id lectura bíblica</h5></th>
		  <th><h5>Lectura bíblica</h5></th>
		  <th><h5>Nombre de lección</h5></th>
		  <th><h5>Editar</h5></th>
		  <th><h5>Eliminar</h5></th>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-bible_reading_text">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>

';

	for ($n = 0; $n < count($bible_reading_text); $n++) {
		$template_bible_reading_text .= '
		<tr>
        <td>' . $bible_reading_text[$n]['id_bibles_reading_text'] . '</td>
		<td><h5 class="text-justify padding particle">' . $bible_reading_text[$n]['reading'] . '</h5></td>
		<td>' . $bible_reading_text[$n]['name_lesson'] . '</td>
        <td>
		<form method="POST">
		<input type="hidden" name="r" value="capture-lessons-edit-bible_reading_text">
					<input type="hidden" name="reading" value="' . $bible_reading_text[$n]['reading'] . '">
					<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
				</form>
	</td>
        <td><form method="POST">
		<input type="hidden" name="r" value="capture-lessons-delete-bible_reading_text">
					<input type="hidden" name="reading" value="' . $bible_reading_text[$n]['reading'] . '">
		<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
		</form></td>
		<td></td>
      </tr>

		';
	}

	$template_bible_reading_text .= '
	</tbody>
	</table>
  </div>

  </div>
	';

	print($template_bible_reading_text);
}

/**--------------------------------------------------------------------**/

print('<div class="tab-pane fade" id="v-pills-19" role="tabpanel" aria-labelledby="v-pills-19-tab">');

for ($q = 1; $q <= 8; $q++) {

	$get = 'get' . $q;

	$questions_controller = new QuestionsController1();
	$question = $questions_controller->$get();

	if (empty($question)) {
		print('

		<h2 class="p1">GESTIÓN DE PREGUNTAS ' . $q . '</h2>

	');

	$template_question = '

	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-question' . $q . '">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar pregunta">
	  </form>
	   </h5></th>
		</tr>
	  </thead>
	  <tbody>

	  ';

	$template_question .= '
	</tbody>
</table>
</div>

';

	print($template_question);

	} else {

		$template_question = '

		<h2 class="p1">GESTIÓN DE PREGUNTAS ' . $q . '</h2>

		<div class="container backgroundtable">          
		<table class="table-dark table-striped table-responsive table backgroundtable">
		  <thead>
			<tr>
			  <th><h5>Id pregunta</h5></th>
			  <th><h5>Pregunta</h5></th>
			  <th><h5>Nombre de lección</h5></th>
			  <th><h5>Editar</h5></th>
			  <th><h5>Eliminar</h5></th>
			  <th><h5>
			  <form method="POST">
			  <input type="hidden" name="r" value="capture-lessons-add-question' . $q . '">
			  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
		  </form>
		  </th></h5>
			</tr>
		  </thead>
		  <tbody>

		  ';

		for ($n = 0; $n < count($question); $n++) {
			$template_question .= '
			<tr>
			<td>' . $question[$n]['id_question' . $q] . '</td>
			<td><h5 class="text-justify padding particle">' . $question[$n]['question' . $q] . '</h5></td>
			<td>' . $question[$n]['name_lesson'] . '</td>
			<td>
			<form method="POST">
			<input type="hidden" name="r" value="capture-lessons-edit-question' . $q . '">
					<input type="hidden" name="question' . $q . '" value="' . $question[$n]['question' . $q] . '">
						<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
					</form>
		</td>
			<td><form method="POST">
			<input type="hidden" name="r" value="capture-lessons-delete-question' . $q . '">
					<input type="hidden" name="question' . $q . '" value="' . $question[$n]['question' . $q] . '">
			<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
			</form></td>
			<td></td>
		  </tr>
			
		';
		}

		$template_question .= '
		</tbody>
	</table>
  </div>

	';

		print($template_question);
	}
}
print('</div>');

/**-------------------------------------------------------------------- */
print('<div class="tab-pane fade" id="v-pills-20" role="tabpanel" aria-labelledby="v-pills-20-tab">');

for ($b = 1; $b <= 8; $b++) {


	$get = 'get' . $b;

	$titles_bibles_quotes_controller = new TitlesBiblesQuotesController();
	$quote = $titles_bibles_quotes_controller->$get();

	if (empty($quote)) {
		print('

		<h2 class="p1">GESTIÓN DE TÍTULOS DE CITAS BIBLICAS DE PREGUNTAS ' . $b . '</h2>

	');



	$template_quote = '

		<div class="container backgroundtable">          
		<table class="table-dark table-striped table-responsive table backgroundtable">
		  <thead>
			<tr>
			  <th><h5>
			  <form method="POST">
			  <input type="hidden" name="r" value="capture-lessons-add-quote' . $b . '">
			  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
		  </form>
		  </th></h5>
			</tr>
		  </thead>
		  <tbody>
';

		$template_quote .= '
		</tbody>
	</table>
  </div>
	';

		print($template_quote);	

	} else {
		$template_quote = '
		<h2 class="p1">GESTIÓN DE TÍTULOS DE CITAS BIBLICAS DE PREGUNTAS ' . $b . '</h2>

		<div class="container backgroundtable">          
		<table class="table-dark table-striped table-responsive table backgroundtable">
		  <thead>
			<tr>
			  <th><h5>Id títulos de citas bíblicas</h5></th>
			  <th><h5>Títulos citas bíblicas</h5></th>
			  <th><h5>Nombre de lección</h5></th>
			  <th><h5>Número de pregunta</h5></th>
			  <th><h5>Editar</h5></th>
			  <th><h5>Eliminar</h5></th>
			  <th><h5>
			  <form method="POST">
			  <input type="hidden" name="r" value="capture-lessons-add-quote' . $b . '">
			  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
		  </form>
		  </th></h5>
			</tr>
		  </thead>
		  <tbody>
';

		for ($n = 0; $n < count($quote); $n++) {
			$template_quote .= '
			<tr>
			<td>' . $quote[$n]['id_title_bible_quote' . $b] . '</td>
			<td><h5 class="text-justify padding particle">' . $quote[$n]['title_bible_quote' . $b] . '</h5></td>
			<td>' . $quote[$n]['name_lesson'] . '</td>
			<td>' . $quote[$n]['number_question'] . '</td>
			<td>
			<form method="POST">
			<input type="hidden" name="r" value="capture-lessons-edit-quote' . $b . '">
					<input type="hidden" name="id_title_bible_quote' . $b . '" value="' . $quote[$n]['id_title_bible_quote' . $b] . '">
						<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
					</form>
		</td>
			<td><form method="POST">
			<input type="hidden" name="r" value="capture-lessons-delete-quote' . $b . '">
					<input type="hidden" name="id_title_bible_quote' . $b . '" value="' . $quote[$n]['id_title_bible_quote' . $b] . '">
			<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
			</form></td>
			<td></td>
		  </tr>

		';
		}

		$template_quote .= '
		</tbody>
	</table>
  </div>
	';

		print($template_quote);
	}
}
print('</div>');
/**-------------------------------------------------------------------- */
print('<div class="tab-pane fade" id="v-pills-21" role="tabpanel" aria-labelledby="v-pills-21-tab">');
for ($c = 1; $c <= 8; $c++) {

	$get = 'get' . $c;

	$bibles_quotes_controller = new BiblesQuotesController();
	$bquote = $bibles_quotes_controller->$get();

	if (empty($bquote)) {
		print('
		<h2 class="p1">GESTIÓN DE CITAS BÍBLICAS DE PREGUNTAS ' . $c . '</h2>
	');


	$template_bquote = '
	
	<div class="container backgroundtable">          
	<table class="table-dark table-striped table-responsive table backgroundtable">
	  <thead>
		<tr>
		  <th><h5>
		  <form method="POST">
		  <input type="hidden" name="r" value="capture-lessons-add-bquote' . $c . '">
		  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
	  </form>
	  </th></h5>
		</tr>
	  </thead>
	  <tbody>
';

	$template_bquote .= '
	</tbody>
</table>
</div>

';

	print($template_bquote);

	} else {
		$template_bquote = '
		<h2 class="p1">GESTIÓN DE CITAS BÍBLICAS DE PREGUNTAS ' . $c . '</h2>

		<div class="container backgroundtable">          
		<table class="table-dark table-striped table-responsive table backgroundtable">
		  <thead>
			<tr>
			  <th><h5>Id citas bíblicas</h5></th>
			  <th><h5>Citas bíblicas</h5></th>
			  <th><h5>Nombre de lección</h5></th>
			  <th><h5>Número de pregunta</h5></th>
			  <th><h5>Editar</h5></th>
			  <th><h5>Eliminar</h5></th>
			  <th><h5>
			  <form method="POST">
			  <input type="hidden" name="r" value="capture-lessons-add-bquote' . $c . '">
			  <input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Agregar">
		  </form>
		  </th></h5>
			</tr>
		  </thead>
		  <tbody>
';

		for ($n = 0; $n < count($bquote); $n++) {
			$template_bquote .= '
			<tr>
			<td>' . $bquote[$n]['id_bible_quote' . $c] . '</td>
			<td><h5 class="text-justify padding particle">' . $bquote[$n]['bible_quote' . $c] . '</h5></td>
			<td>' . $bquote[$n]['name_lesson'] . '</td>
			<td>' . $bquote[$n]['number_question'] . '</td>
			<td>
			<form method="POST">
			<input type="hidden" name="r" value="capture-lessons-edit-bquote' . $c . '">
					<input type="hidden" name="id_bible_quote' . $c . '" value="' . $bquote[$n]['id_bible_quote' . $c] . '">
						<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Editar">
					</form>
		</td>
			<td><form method="POST">
			<input type="hidden" name="r" value="capture-lessons-delete-bquote' . $c . '">
					<input type="hidden" name="id_bible_quote' . $c . '" value="' . $bquote[$n]['id_bible_quote' . $c] . '">
			<input class="btn btn-outline-dark col-sm-12 col-md-12 hymn particle marginq" type="submit" value="Eliminar">
			</form></td>
			<td></td>
		  </tr>

		';
		}

		$template_bquote .= '
		</tbody>
	</table>
  </div>
	
	';

		print($template_bquote);
	}
}
print('</div>
</div>
	</div>	
	');
