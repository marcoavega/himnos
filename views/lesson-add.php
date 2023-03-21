<?php
if ($_POST['r'] == 'lesson-add' && !isset($_POST['crud'])) {

	$year_controller = new YearsController();
	$year = $year_controller->get();
	$year_select = '';
	for ($n = 0; $n < count($year); $n++) {
		$year_select .= '<option value="' . $year[$n]['id_year'] . '">' . $year[$n]['year'] . '</option>';
	}
	$trimesters_controller = new TrimestersController();
	$trimester = $trimesters_controller->get();
	$trimester_select = '';
	for ($n = 0; $n < count($trimester); $n++) {
		$trimester_select .= '<option value="' . $trimester[$n]['id_trimester'] . '">' . $trimester[$n]['trimester_number'] . '</option>';
	}
	$dates_controller = new DatesController();
	$date = $dates_controller->get();
	$date_select = '';
	for ($n = 0; $n < count($date); $n++) {
		$date_select .= '<option value="' . $date[$n]['id_date'] . '">' . $date[$n]['date'] . '</option>';
	}
	$lt_controller = new LessonsTitlesController();
	$lt = $lt_controller->get();
	$lt_select = '';
	for ($n = 0; $n < count($lt); $n++) {
		$lt_select .= '<option value="' . $lt[$n]['id_lesson_title'] . '">' . $lt[$n]['name_lesson'] . '</option>';
	}
	$tvc_controller = new TitlesVersesController();
	$tvc = $tvc_controller->get();
	$tvc_select = '';
	for ($n = 0; $n < count($tvc); $n++) {
		$tvc_select .= '<option value="' . $tvc[$n]['id_verse'] . '">' . $tvc[$n]['title_verse'] . '</option>';
	}
	$tc_controller = new TextVersesController();
	$tc = $tc_controller->get();
	$tc_select = '';
	for ($n = 0; $n < count($tc); $n++) {
		$tc_select .= '<option value="' . $tc[$n]['id_verses_text'] . '">' . $tc[$n]['verse_text'] . '</option>';
	}
	$brc_controller = new BiblesReadingsController();
	$brc = $brc_controller->get();
	$brc_select = '';
	for ($n = 0; $n < count($brc); $n++) {
		$brc_select .= '<option value="' . $brc[$n]['id_bibles_reading'] . '">' . $brc[$n]['title_reading'] . '</option>';
	}
	$br_controller = new BiblesReadingsTextController();
	$br = $br_controller->get();
	$br_select = '';
	for ($n = 0; $n < count($br); $n++) {
		$br_select .= '<option value="' . $br[$n]['id_bibles_reading_text'] . '">' . $br[$n]['reading'] . '</option>';
	}
	$ojt_controller = new ObjectivesController();
	$ojt = $ojt_controller->get();
	$ojt_select = '';
	for ($n = 0; $n < count($ojt); $n++) {
		$ojt_select .= '<option value="' . $ojt[$n]['id_objective'] . '">' . $ojt[$n]['objective'] . '</option>';
	}
	$cc_controller = new CommentsController();
	$cc = $cc_controller->get();
	$cc_select = '';
	for ($n = 0; $n < count($cc); $n++) {
		$cc_select .= '<option value="' . $cc[$n]['id_comment'] . '">' . $cc[$n]['comment'] . '</option>';
	}
	$qc1_controller = new QuestionsController1();
	$qc1 = $qc1_controller->get1();
	$qc1_select = '';
	for ($n = 0; $n < count($qc1); $n++) {
		$qc1_select .= '<option value="' . $qc1[$n]['id_question1'] . '">' . $qc1[$n]['question1'] . '</option>';
	}
	$qc2_controller = new QuestionsController1();
	$qc2 = $qc2_controller->get2();
	$qc2_select = '';
	for ($n = 0; $n < count($qc2); $n++) {
		$qc2_select .= '<option value="' . $qc2[$n]['id_question2'] . '">' . $qc2[$n]['question2'] . '</option>';
	}
	$qc3_controller = new QuestionsController1();
	$qc3 = $qc3_controller->get3();
	$qc3_select = '';
	for ($n = 0; $n < count($qc3); $n++) {
		$qc3_select .= '<option value="' . $qc3[$n]['id_question3'] . '">' . $qc3[$n]['question3'] . '</option>';
	}
	$qc4_controller = new QuestionsController1();
	$qc4 = $qc4_controller->get4();
	$qc4_select = '';
	for ($n = 0; $n < count($qc4); $n++) {
		$qc4_select .= '<option value="' . $qc4[$n]['id_question4'] . '">' . $qc4[$n]['question4'] . '</option>';
	}
	$qc5_controller = new QuestionsController1();
	$qc5 = $qc5_controller->get5();
	$qc5_select = '';
	for ($n = 0; $n < count($qc5); $n++) {
		$qc5_select .= '<option value="' . $qc5[$n]['id_question5'] . '">' . $qc5[$n]['question5'] . '</option>';
	}
	$qc6_controller = new QuestionsController1();
	$qc6 = $qc6_controller->get6();
	$qc6_select = '';
	for ($n = 0; $n < count($qc6); $n++) {
		$qc6_select .= '<option value="' . $qc6[$n]['id_question6'] . '">' . $qc6[$n]['question6'] . '</option>';
	}
	$qc7_controller = new QuestionsController1();
	$qc7 = $qc7_controller->get7();
	$qc7_select = '';
	for ($n = 0; $n < count($qc7); $n++) {
		$qc7_select .= '<option value="' . $qc7[$n]['id_question7'] . '">' . $qc7[$n]['question7'] . '</option>';
	}
	$qc8_controller = new QuestionsController1();
	$qc8 = $qc8_controller->get8();
	$qc8_select = '';
	for ($n = 0; $n < count($qc8); $n++) {
		$qc8_select .= '<option value="' . $qc8[$n]['id_question8'] . '">' . $qc8[$n]['question8'] . '</option>';
	}
	$tbq1_controller = new  TitlesBiblesQuotesController();
	$tbq1 = $tbq1_controller->get1();
	$tbq1_select = '';
	for ($n = 0; $n < count($tbq1); $n++) {
		$tbq1_select .= '<option value="' . $tbq1[$n]['id_title_bible_quote1'] . '">' . $tbq1[$n]['title_bible_quote1'] . '</option>';
	}
	$tbq2_controller = new  TitlesBiblesQuotesController();
	$tbq2 = $tbq2_controller->get2();
	$tbq2_select = '';
	for ($n = 0; $n < count($tbq2); $n++) {
		$tbq2_select .= '<option value="' . $tbq2[$n]['id_title_bible_quote2'] . '">' . $tbq2[$n]['title_bible_quote2'] . '</option>';
	}
	$tbq3_controller = new  TitlesBiblesQuotesController();
	$tbq3 = $tbq3_controller->get3();
	$tbq3_select = '';
	for ($n = 0; $n < count($tbq3); $n++) {
		$tbq3_select .= '<option value="' . $tbq3[$n]['id_title_bible_quote3'] . '">' . $tbq3[$n]['title_bible_quote3'] . '</option>';
	}
	$tbq4_controller = new  TitlesBiblesQuotesController();
	$tbq4 = $tbq4_controller->get4();
	$tbq4_select = '';
	for ($n = 0; $n < count($tbq4); $n++) {
		$tbq4_select .= '<option value="' . $tbq4[$n]['id_title_bible_quote4'] . '">' . $tbq4[$n]['title_bible_quote4'] . '</option>';
	}
	$tbq5_controller = new  TitlesBiblesQuotesController();
	$tbq5 = $tbq5_controller->get5();
	$tbq5_select = '';
	for ($n = 0; $n < count($tbq5); $n++) {
		$tbq5_select .= '<option value="' . $tbq5[$n]['id_title_bible_quote5'] . '">' . $tbq5[$n]['title_bible_quote5'] . '</option>';
	}
	$tbq6_controller = new  TitlesBiblesQuotesController();
	$tbq6 = $tbq6_controller->get6();
	$tbq6_select = '';
	for ($n = 0; $n < count($tbq6); $n++) {
		$tbq6_select .= '<option value="' . $tbq6[$n]['id_title_bible_quote6'] . '">' . $tbq6[$n]['title_bible_quote6'] . '</option>';
	}
	$tbq7_controller = new  TitlesBiblesQuotesController();
	$tbq7 = $tbq7_controller->get7();
	$tbq7_select = '';
	for ($n = 0; $n < count($tbq7); $n++) {
		$tbq7_select .= '<option value="' . $tbq7[$n]['id_title_bible_quote7'] . '">' . $tbq7[$n]['title_bible_quote7'] . '</option>';
	}
	$tbq8_controller = new  TitlesBiblesQuotesController();
	$tbq8 = $tbq8_controller->get8();
	$tbq8_select = '';
	for ($n = 0; $n < count($tbq8); $n++) {
		$tbq8_select .= '<option value="' . $tbq8[$n]['id_title_bible_quote8'] . '">' . $tbq8[$n]['title_bible_quote8'] . '</option>';
	}
	$bq1_controller = new  BiblesQuotesController();
	$bq1 = $bq1_controller->get1();
	$bq1_select = '';
	for ($n = 0; $n < count($bq1); $n++) {
		$bq1_select .= '<option value="' . $bq1[$n]['id_bible_quote1'] . '">' . $bq1[$n]['bible_quote1'] . '</option>';
	}
	$bq2_controller = new  BiblesQuotesController();
	$bq2 = $bq2_controller->get2();
	$bq2_select = '';
	for ($n = 0; $n < count($bq2); $n++) {
		$bq2_select .= '<option value="' . $bq2[$n]['id_bible_quote2'] . '">' . $bq2[$n]['bible_quote2'] . '</option>';
	}
	$bq3_controller = new  BiblesQuotesController();
	$bq3 = $bq3_controller->get3();
	$bq3_select = '';
	for ($n = 0; $n < count($bq3); $n++) {
		$bq3_select .= '<option value="' . $bq3[$n]['id_bible_quote3'] . '">' . $bq3[$n]['bible_quote3'] . '</option>';
	}
	$bq4_controller = new  BiblesQuotesController();
	$bq4 = $bq4_controller->get4();
	$bq4_select = '';
	for ($n = 0; $n < count($bq4); $n++) {
		$bq4_select .= '<option value="' . $bq4[$n]['id_bible_quote4'] . '">' . $bq4[$n]['bible_quote4'] . '</option>';
	}
	$bq5_controller = new  BiblesQuotesController();
	$bq5 = $bq5_controller->get5();
	$bq5_select = '';
	for ($n = 0; $n < count($bq5); $n++) {
		$bq5_select .= '<option value="' . $bq5[$n]['id_bible_quote5'] . '">' . $bq5[$n]['bible_quote5'] . '</option>';
	}
	$bq6_controller = new  BiblesQuotesController();
	$bq6 = $bq6_controller->get6();
	$bq6_select = '';
	for ($n = 0; $n < count($bq6); $n++) {
		$bq6_select .= '<option value="' . $bq6[$n]['id_bible_quote6'] . '">' . $bq6[$n]['bible_quote6'] . '</option>';
	}
	$bq7_controller = new  BiblesQuotesController();
	$bq7 = $bq7_controller->get7();
	$bq7_select = '';
	for ($n = 0; $n < count($bq7); $n++) {
		$bq7_select .= '<option value="' . $bq7[$n]['id_bible_quote7'] . '">' . $bq7[$n]['bible_quote7'] . '</option>';
	}
	$bq8_controller = new  BiblesQuotesController();
	$bq8 = $bq8_controller->get8();
	$bq8_select = '';
	for ($n = 0; $n < count($bq8); $n++) {
		$bq8_select .= '<option value="' . $bq8[$n]['id_bible_quote8'] . '">' . $bq8[$n]['bible_quote8'] . '</option>';
	}

	print('<div class="container-fluid list div-himnos"><h2 class="p1">Agregar Lección</h2></div>');


	printf(
		'
<div class="row container">
	<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
</div>
	
<div class="container">
	
	<div class="col-md-12">

		<form method="POST" class="">
		<div class="form-group">
			<div class="">
				<input type="hidden" name="id_lesson" value="0">
			</div>
			<div class="">
				<select class="custom-select" name="number_lesson" placeholder="Número de lección" required>
					<option value="Lección 1">Lección 1</option>
					<option value="Lección 2">Lección 2</option>
					<option value="Lección 3">Lección 3</option>
					<option value="Lección 4">Lección 4</option>
					<option value="Lección 5">Lección 5</option>
					<option value="Lección 6">Lección 6</option>
					<option value="Lección 7">Lección 7</option>
					<option value="Lección 8">Lección 8</option>
					<option value="Lección 9">Lección 9</option>
					<option value="Lección 10">Lección 10</option>
					<option value="Lección 11">Lección 11</option>
					<option value="Lección 12">Lección 12</option>
					<option value="Lección 13">Lección 13</option>
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_year" placeholder="Años" required>
					<option value="">Año</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_trimester" placeholder="Trimestres" required>
					<option value="">Trimestre</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_date" placeholder="Fechas" required>
					<option value="">Fecha</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_lesson_title" placeholder="Títulos de lecciones" required>
					<option value="">Título de lección</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_verse" placeholder="Títulos de verso" required>
					<option value="">Título de verso</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_verses_text" placeholder="Texto de verso" required>
					<option value="">Texto de verso</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bibles_reading" placeholder="Títulos de versos de lecturas bíblicas" required>
					<option value="">Título de verso de lectura bíblica</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bibles_reading_text" placeholder="Texto de versos de lecturas bíblicas" required>
					<option value="">Texto de verso de lectura bíblica</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_objective" placeholder="Objetivos" required>
					<option value="">Objetivos</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_comment" placeholder="Comentarios" required>
					<option value="">Comentario</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question1" placeholder="Preguntas 1" required>
					<option value="">Pregunta 1</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question2" placeholder="Preguntas 2" required>
					<option value="">Pregunta 2</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question3" placeholder="Preguntas 3" required>
					<option value="">Pregunta 3</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question4" placeholder="Preguntas 4" required>
					<option value="">Pregunta 4</option>
					%s<div class="">
				</div>
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question5" placeholder="Preguntas 5" required>
					<option value="">Pregunta 5</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question6" placeholder="Preguntas 6" required>
					<option value="">Pregunta 6</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question7" placeholder="Preguntas 7" >
					<option value="sin">Pregunta 7</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question8" placeholder="Preguntas 8" >
				<option value="sin">Pregunta 8</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote1" placeholder="Títulos de citas de lecturas bíblicas 1" required>
					<option value="">Títulos de citas de lecturas bíblicas 1</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote2" placeholder="Títulos de citas de lecturas bíblicas 2" required>
					<option value="">Títulos de citas de lecturas bíblicas 2</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote3" placeholder="Títulos de citas de lecturas bíblicas 3" required>
					<option value="">Títulos de citas de lecturas bíblicas 3</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote4" placeholder="Títulos de citas de lecturas bíblicas 4" required>
					<option value="">Títulos de citas de lecturas bíblicas 4</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote5" placeholder="Títulos de citas de lecturas bíblicas 5" required>
					<option value="">Títulos de citas de lecturas bíblicas 5</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote6" placeholder="Títulos de citas de lecturas bíblicas 6" >
					<option value="">Títulos de citas de lecturas bíblicas 6</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote7" placeholder="Títulos de citas de lecturas bíblicas 7" >
				<option value="sin">Títulos de citas de lecturas bíblicas 7</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote8" placeholder="Títulos de citas de lecturas bíblicas 8" >
					<option value="sin">Títulos de citas de lecturas bíblicas 8</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote1" placeholder="Citas de lecturas bíblicas 1" required>
					<option value="">Citas de lecturas bíblicas 1</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote2" placeholder="Citas de lecturas bíblicas 2" required>
					<option value="">Citas de lecturas bíblicas 2</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote3" placeholder="Citas de lecturas bíblicas 3" required>
					<option value="">Citas de lecturas bíblicas 3</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote4" placeholder="Citas de lecturas bíblicas 4" required>
					<option value="">Citas de lecturas bíblicas 4</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote5" placeholder="Citas de lecturas bíblicas 5" required>
					<option value="">Citas de lecturas bíblicas 5</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote6" placeholder="Citas de lecturas bíblicas 6" >
					<option value="">Citas de lecturas bíblicas 6</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote7" placeholder="Citas de lecturas bíblicas 7" >
					<option value="sin">Citas de lecturas bíblicas 7</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote8" placeholder="Citas de lecturas bíblicas 8" >
					<option value="sin">Citas de lecturas bíblicas 8</option>
					%s
				</select>
			</div>
			<div class="">
				<input class="btn btn-outline-dark col-sm-12 col-md-6 hymn particle marginq" type="submit" value="Agregar">
				<input type="hidden" name="r" value="lesson-add">
				<input type="hidden" name="crud" value="set">
			</div>
		</div>
		</form>

	</div>
</div>
	',
		$year_select,
		$trimester_select,
		$date_select,
		$lt_select,
		$tvc_select,
		$tc_select,
		$brc_select,
		$br_select,
		$ojt_select,
		$cc_select,
		$qc1_select,
		$qc2_select,
		$qc3_select,
		$qc4_select,
		$qc5_select,
		$qc6_select,
		$qc7_select,
		$qc8_select,
		$tbq1_select,
		$tbq2_select,
		$tbq3_select,
		$tbq4_select,
		$tbq5_select,
		$tbq6_select,
		$tbq7_select,
		$tbq8_select,
		$bq1_select,
		$bq2_select,
		$bq3_select,
		$bq4_select,
		$bq5_select,
		$bq6_select,
		$bq7_select,
		$bq8_select,
	);
} else if ($_POST['r'] == 'lesson-add'   && $_POST['crud'] == 'set') {
	$lc_controller = new LessonsController();

	$new_pd = array(
		'id_lesson' =>  $_POST['id_lesson'],
		'number_lesson' =>  $_POST['number_lesson'],
		'id_year' =>  $_POST['id_year'],
		'id_trimester' =>  $_POST['id_trimester'],
		'id_date' =>  $_POST['id_date'],
		'id_lesson_title' =>  $_POST['id_lesson_title'],
		'id_verse' =>  $_POST['id_verse'],
		'id_verses_text' =>  $_POST['id_verses_text'],
		'id_bibles_reading' =>  $_POST['id_bibles_reading'],
		'id_bibles_reading_text' =>  $_POST['id_bibles_reading_text'],
		'id_objective' =>  $_POST['id_objective'],
		'id_comment' =>  $_POST['id_comment'],
		'id_question1' =>  $_POST['id_question1'],
		'id_question2' =>  $_POST['id_question2'],
		'id_question3' =>  $_POST['id_question3'],
		'id_question4' =>  $_POST['id_question4'],
		'id_question5' =>  $_POST['id_question5'],
		'id_question6' =>  $_POST['id_question6'],
		'id_question7' =>  $_POST['id_question7'],
		'id_question8' =>  $_POST['id_question8'],
		'id_title_bible_quote1' =>  $_POST['id_title_bible_quote1'],
		'id_title_bible_quote2' =>  $_POST['id_title_bible_quote2'],
		'id_title_bible_quote3' =>  $_POST['id_title_bible_quote3'],
		'id_title_bible_quote4' =>  $_POST['id_title_bible_quote4'],
		'id_title_bible_quote5' =>  $_POST['id_title_bible_quote5'],
		'id_title_bible_quote6' =>  $_POST['id_title_bible_quote6'],
		'id_title_bible_quote7' =>  $_POST['id_title_bible_quote7'],
		'id_title_bible_quote8' =>  $_POST['id_title_bible_quote8'],
		'id_bible_quote1' =>  $_POST['id_bible_quote1'],
		'id_bible_quote2' =>  $_POST['id_bible_quote2'],
		'id_bible_quote3' =>  $_POST['id_bible_quote3'],
		'id_bible_quote4' =>  $_POST['id_bible_quote4'],
		'id_bible_quote5' =>  $_POST['id_bible_quote5'],
		'id_bible_quote6' =>  $_POST['id_bible_quote6'],
		'id_bible_quote7' =>  $_POST['id_bible_quote7'],
		'id_bible_quote8' =>  $_POST['id_bible_quote8'],
	);

	$lc = $lc_controller->set($new_pd);

	$template = '
		<div class="container">
			<p class="item  add">Lección <b>%s</b> salvada</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("lessons")
			}
		</script>
	';

	printf($template, $_POST['number_lesson']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}
