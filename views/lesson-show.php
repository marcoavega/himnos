<?php
if ($_POST['r'] == 'lesson-show' && isset($_POST['id_lesson'])) {

	$ls_controller = new LessonsController();

	$ls = $ls_controller->get($_POST['id_lesson']);

	if (empty($ls)) {
		printf('
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
			<h3 class="centrartexto padding-versiculo">Error al cargar la información de la Lección %s</h3>
		</form>
	</div>
</div>

<script>
	window.onload = function (){
		reloadPage("lessons")
	}
</script>

		', $_POST['id_lesson']);
	
	} else {
		$template_ls = '

	<div class="row container">
		<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
	</div>

	<div class="centrartexto tituloh4">
		<h2 class="list2 padding2">Lección: %s</h2>
	</div>
	
	<div class="">
	
			<div class="col-md-12 list">
				<div class="nav justify-content-center nav-pills nav-div list" id="v-pills-tab" role="tablist"
					aria-orientation="vertical">
					<a class="nav-link active  btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9"
						role="tab" aria-controls="v-pills-9" aria-selected="true">Versículo</a>
					<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab"
						aria-controls="v-pills-10" aria-selected="false">Lectura</a>
					<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab"
						aria-controls="v-pills-11" aria-selected="false">Comentario</a>
					<a class="nav-link btn btn-outline-dark col-sm-12 col-md-2 hymn particle center" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab"
						aria-controls="v-pills-12" aria-selected="false">Preguntas</a>
				</div>
			</div>
	
			<div class="col-md-12 ">

				<div class="tab-content" id="v-pills-tabContent">
	
					<div class="tab-pane fade show active div-versiculo centrartexto" id="v-pills-9" role="tabpanel"
						aria-labelledby="v-pills-9-tab">
						<div class=""><h2 class="centrartexto">Objetivo: %s</h2></div>
						<div class="rounded" id="pills-versiculo" role="tabpanel"
							aria-labelledby="pills-versiculo-tab">
							<h3 class="centrartexto">VERSÍCULO PARA MEMORIZAR:</h3>
							<h3 class="centrartexto padding-versiculo">%s</h3>
							<h3 class="centrartexto padding-versiculo">%s</h3>
						</div>
					</div>
	
					<div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
						<h3 class="centrartexto2">Lectura bíblica: %s</h3>
						<div class="shadow-lg scrollbar margin-lectura rounded" id="lectura"
							aria-labelledby="lectura-tab">
							<h3 class="text-justify padding particle">
								%s
						</div>
					</div>
	
					<div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
						<h3 class="centrartexto2 animated zoomIn">Comentario.</h3>
						<div class=" scrollbar margin-comentario rounded" id="comentario"
							aria-labelledby="comentario-tab">
							<h3 class="text-justify padding particle">%s</h3>
						</div>
					</div>
	
					<div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
	
						<div class="col-md-12">
							<div class="nav justify-content-center nav-pills shadow-lg nav-div-2" id="v-pills-tab"
								role="tablist" aria-orientation="vertical">';

		for ($i = 1; $i <= 8; $i++) {
			$template_ls .= '
									 <a class="nav-link  btn btn-dark hymn particle center" id="v-pills-' . $i . '-tab" data-toggle="pill" href="#v-pills-' . $i . ' " role="tab" aria-controls="v-pills-' . $i . '" aria-selected="false">Pregunta ' . $i . '</a>
								';
		}
		$template_ls .= '
							</div>
						</div>
	
						<div class="row ">
	
							<div class="col-md-12">
								<div class="tab-content" id="v-pills-tabContent">';

		for ($i = 1; $i <= 8; $i++) {
			$template_ls .= '		
<div class="tab-pane fade div-preguntas " id="v-pills-' . $i . '" role="tabpanel" aria-labelledby="v-pills-' . $i . '-tab">
    <!--Ejemplo-->
    <div class="rounded marginq" id="pregunta' . $i . '" role="tabpanel" aria-labelledby="pregunta' . $i . '-tab">
        <h3 class="center">Pregunta ' . $i . '.</h3>
        <h2 class="centrartexto">%s
        </h2>
        <h3 class="particle-pregunta">%s
        </h3>
        
        <div class="scrollbar rounded" id="pregunta$i" role="tabpanel"
            aria-labelledby="pregunta' . $i . '-tab">
            <h3 class="text-justify padding particle">
                %s
            </h3>
        </div>
    </div>

</div>
<!--pill 1-->';
		};
		$template_ls .= '											
</div>
</div>

</div>

</div>
</div>
<!--v-pills-tabContent-->
</div>
<!--col9-->
</div>
<!--row-->


</div>
';


		printf(
			$template_ls,
			/*$ls[0]['id_lesson'],*/
			$ls[0]['name_lesson'],
			$ls[0]['objective'],
			$ls[0]['title_verse'],
			$ls[0]['verse_text'],
			$ls[0]['title_reading'],
			$ls[0]['reading'],
			$ls[0]['comment'],

			$ls[0]['question1'],
			$ls[0]['title_bible_quote1'],
			$ls[0]['bible_quote1'],
			$ls[0]['question2'],
			$ls[0]['title_bible_quote2'],
			$ls[0]['bible_quote2'],
			$ls[0]['question3'],
			$ls[0]['title_bible_quote3'],
			$ls[0]['bible_quote3'],

			$ls[0]['question4'],
			$ls[0]['title_bible_quote4'],
			$ls[0]['bible_quote4'],
			$ls[0]['question5'],
			$ls[0]['title_bible_quote5'],
			$ls[0]['bible_quote5'],
			$ls[0]['question6'],
			$ls[0]['title_bible_quote6'],
			$ls[0]['bible_quote6'],
			$ls[0]['question7'],
			$ls[0]['title_bible_quote7'],
			$ls[0]['bible_quote7'],
			$ls[0]['question8'],
			$ls[0]['title_bible_quote8'],
			$ls[0]['bible_quote8']

			/*$ls[0]['number_lesson'],
			$ls[0]['year'],
			$ls[0]['trimester_title'],
			$ls[0]['date'],*/

		);
	}
} else {
	$controller = new ViewController();
	$controller->load_view('error404');
}