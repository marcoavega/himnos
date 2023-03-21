<?php
$lc_controller = new LessonsController();

if ($_POST['r'] == 'lesson-edit'   && !isset($_POST['crud'])) {

	$lc = $lc_controller->get($_POST['trimester_title']);

	if (empty($lc)) {
		$template = '
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
			<h3 class="centrartexto padding-versiculo">No existe la lección %s</h3>
		</form>
	</div>
</div>
<script>
	window.onload = function (){
		reloadPage("lessons")
	}
</script>
';

		printf($template, $_POST['trimester_title']);
	} else {



		$year_controller = new YearsController();
		$year = $year_controller->get();
		$year_select = '';
		for ($a = 0; $a < count($year); $a++) {
			$selected_year = ($lc[0]['year'] == $year[$a]['id_year']) ? 'selected_year' : '';
			$year_select .= '<option value="' . $year[$a]['id_year'] . '"' . $selected_year . '>' . $year[$a]['year'] . '</option>';
		}

		$trimesters_controller = new TrimestersController();
		$trimester = $trimesters_controller->get();
		$trimester_select = '';
		for ($a = 0; $a < count($trimester); $a++) {
			$selected_trimester = ($lc[0]['trimester_title'] == $trimester[$a]['id_trimester']) ? 'selected_trimester' : '';
			$trimester_select .= '<option value="' . $trimester[$a]['id_trimester'] . '"' . $selected_trimester . '>' . $trimester[$a]['trimester_title'] . '</option>';
		}

		$dates_controller = new DatesController();
		$date = $dates_controller->get();
		$date_select = '';
		for ($a = 0; $a < count($date); $a++) {
			$selected_date = ($lc[0]['date'] == $date[$a]['id_date']) ? 'selected_date' : '';
			$date_select .= '<option value="' . $date[$a]['id_date'] . '"' . $selected_date . '>' . $date[$a]['date'] . '</option>';
		}

		$lt_controller = new LessonsTitlesController();
		$lt = $lt_controller->get();
		$lt_select = '';
		for ($a = 0; $a < count($lt); $a++) {
			$selected_lt = ($lc[0]['name_lesson'] == $lt[$a]['id_lesson_title']) ? 'selected_lt' : '';
			$lt_select .= '<option value="' . $lt[$a]['id_lesson_title'] . '"' . $selected_lt . '>' . $lt[$a]['name_lesson'] . '</option>';
		}

		$tvc_controller = new TitlesVersesController();
		$tvc = $tvc_controller->get();
		$tvc_select = '';
		for ($a = 0; $a < count($tvc); $a++) {
			$selected_tvc = ($tvc[0]['title_verse'] == $tvc[$a]['id_verse']) ? 'selected_tvc' : '';
			$tvc_select .= '<option value="' . $tvc[$a]['id_verse'] . '"' . $selected_tvc . '>' . $tvc[$a]['title_verse'] . '</option>';
		}

		$tc_controller = new TextVersesController();
		$tc = $tc_controller->get();
		$tc_select = '';
		for ($a = 0; $a < count($tc); $a++) {
			$selected_tc = ($tc[0]['verse_text'] == $tc[$a]['id_verses_text']) ? 'selected_tc' : '';
			$tc_select .= '<option value="' . $tc[$a]['id_verses_text'] . '"' . $selected_tc . '>' . $tc[$a]['verse_text'] . '</option>';
		}

		$brc_controller = new BiblesReadingsController();
		$brc = $brc_controller->get();
		$brc_select = '';
		for ($a = 0; $a < count($brc); $a++) {
			$selected_brc = ($brc[0]['title_reading'] == $brc[$a]['id_bibles_reading']) ? 'selected_brc' : '';
			$brc_select .= '<option value="' . $brc[$a]['id_bibles_reading'] . '"' . $selected_brc . '>' . $brc[$a]['title_reading'] . '</option>';
		}
		$br_controller = new BiblesReadingsTextController();
		$br = $br_controller->get();
		$br_select = '';
		for ($a = 0; $a < count($br); $a++) {
			$selected_br = ($br[0]['reading'] == $br[$a]['id_bibles_reading_text']) ? 'selected_br' : '';
			$br_select .= '<option value="' . $br[$a]['id_bibles_reading_text'] . '"' . $selected_br . '>' . $br[$a]['reading'] . '</option>';
		}
		$ojt_controller = new ObjectivesController();
		$ojt = $ojt_controller->get();
		$ojt_select = '';
		for ($a = 0; $a < count($ojt); $a++) {
			$selected_ojt = ($ojt[0]['objective'] == $ojt[$a]['id_objective']) ? 'selected_ojt' : '';
			$ojt_select .= '<option value="' . $ojt[$a]['id_objective'] . '"' . $selected_ojt . '>' . $ojt[$a]['objective'] . '</option>';
		}
		$cc_controller = new CommentsController();
		$cc = $cc_controller->get();
		$cc_select = '';
		for ($a = 0; $a < count($cc); $a++) {
			$selected_cc = ($cc[0]['comment'] == $cc[$a]['id_comment']) ? 'selected_ojt' : '';
			$cc_select .= '<option value="' . $cc[$a]['id_comment'] . '"' . $selected_cc . '>' . $cc[$a]['comment'] . '</option>';
		}
		$qc1_controller = new QuestionsController1();
		$qc1 = $qc1_controller->get1();
		$qc1_select = '';
		for ($a = 0; $a < count($qc1); $a++) {
			$selected_qc1 = ($qc1[0]['question1'] == $qc1[$a]['id_question1']) ? 'selected_qc1' : '';
			$qc1_select .= '<option value="' . $qc1[$a]['id_question1'] . '"' . $selected_qc1 . '>' . $qc1[$a]['question1'] . '</option>';
		}
		$qc2_controller = new QuestionsController1();
		$qc2 = $qc2_controller->get2();
		$qc2_select = '';
		for ($a = 0; $a < count($qc2); $a++) {
			$selected_qc2 = ($qc2[0]['question2'] == $qc2[$a]['id_question2']) ? 'selected_qc2' : '';
			$qc2_select .= '<option value="' . $qc2[$a]['id_question2'] . '"' . $selected_qc2 . '>' . $qc2[$a]['question2'] . '</option>';
		}
		$qc3_controller = new QuestionsController1();
		$qc3 = $qc3_controller->get3();
		$qc3_select = '';
		for ($a = 0; $a < count($qc3); $a++) {
			$selected_qc3 = ($qc3[0]['question3'] == $qc3[$a]['id_question3']) ? 'selected_qc3' : '';
			$qc3_select .= '<option value="' . $qc3[$a]['id_question3'] . '"' . $selected_qc3 . '>' . $qc3[$a]['question3'] . '</option>';
		}
		$qc4_controller = new QuestionsController1();
		$qc4 = $qc4_controller->get4();
		$qc4_select = '';
		for ($a = 0; $a < count($qc4); $a++) {
			$selected_qc4 = ($qc4[0]['question4'] == $qc4[$a]['id_question4']) ? 'selected_qc4' : '';
			$qc4_select .= '<option value="' . $qc4[$a]['id_question4'] . '"' . $selected_qc4 . '>' . $qc4[$a]['question4'] . '</option>';
		}
		$qc5_controller = new QuestionsController1();
		$qc5 = $qc5_controller->get5();
		$qc5_select = '';
		for ($a = 0; $a < count($qc5); $a++) {
			$selected_qc5 = ($qc5[0]['question5'] == $qc5[$a]['id_question5']) ? 'selected_qc5' : '';
			$qc5_select .= '<option value="' . $qc5[$a]['id_question5'] . '"' . $selected_qc5 . '>' . $qc5[$a]['question5'] . '</option>';
		}
		$qc6_controller = new QuestionsController1();
		$qc6 = $qc6_controller->get6();
		$qc6_select = '';
		for ($a = 0; $a < count($qc6); $a++) {
			$selected_qc6 = ($qc6[0]['question6'] == $qc6[$a]['id_question6']) ? 'selected_qc6' : '';
			$qc6_select .= '<option value="' . $qc6[$a]['id_question6'] . '"' . $selected_qc6 . '>' . $qc6[$a]['question6'] . '</option>';
		}
		$qc7_controller = new QuestionsController1();
		$qc7 = $qc7_controller->get7();
		$qc7_select = '';
		for ($a = 0; $a < count($qc7); $a++) {
			$selected_qc7 = ($qc7[0]['question7'] == $qc7[$a]['id_question7']) ? 'selected_qc7' : '';
			$qc7_select .= '<option value="' . $qc7[$a]['id_question7'] . '"' . $selected_qc7 . '>' . $qc7[$a]['question7'] . '</option>';
		}
		$qc8_controller = new QuestionsController1();
		$qc8 = $qc8_controller->get8();
		$qc8_select = '';
		for ($a = 0; $a < count($qc8); $a++) {
			$selected_qc8 = ($qc8[0]['question8'] == $qc8[$a]['id_question8']) ? 'selected_qc8' : '';
			$qc8_select .= '<option value="' . $qc8[$a]['id_question8'] . '"' . $selected_qc8 . '>' . $qc8[$a]['question8'] . '</option>';
		}
		$tbq1_controller = new  TitlesBiblesQuotesController();
		$tbq1 = $tbq1_controller->get1();
		$tbq1_select = '';
		for ($a = 0; $a < count($tbq1); $a++) {
			$selected_tbq1 = ($tbq1[0]['title_bible_quote1'] == $tbq1[$a]['id_title_bible_quote1']) ? 'selected_tbq1' : '';
			$tbq1_select .= '<option value="' . $tbq1[$a]['id_title_bible_quote1'] . '"' . $selected_tbq1 . '>' . $tbq1[$a]['title_bible_quote1'] . '</option>';
		}
		$tbq2_controller = new  TitlesBiblesQuotesController();
		$tbq2 = $tbq2_controller->get2();
		$tbq2_select = '';
		for ($a = 0; $a < count($tbq2); $a++) {
			$selected_tbq2 = ($tbq2[0]['title_bible_quote2'] == $tbq2[$a]['id_title_bible_quote2']) ? 'selected_tbq2' : '';
			$tbq2_select .= '<option value="' . $tbq2[$a]['id_title_bible_quote2'] . '"' . $selected_tbq2 . '>' . $tbq2[$a]['title_bible_quote2'] . '</option>';
		}
		$tbq3_controller = new  TitlesBiblesQuotesController();
		$tbq3 = $tbq3_controller->get3();
		$tbq3_select = '';
		for ($a = 0; $a < count($tbq3); $a++) {
			$selected_tbq3 = ($tbq3[0]['title_bible_quote3'] == $tbq3[$a]['id_title_bible_quote3']) ? 'selected_tbq3' : '';
			$tbq3_select .= '<option value="' . $tbq3[$a]['id_title_bible_quote3'] . '"' . $selected_tbq3 . '>' . $tbq3[$a]['title_bible_quote3'] . '</option>';
		}
		$tbq4_controller = new  TitlesBiblesQuotesController();
		$tbq4 = $tbq4_controller->get4();
		$tbq4_select = '';
		for ($a = 0; $a < count($tbq4); $a++) {
			$selected_tbq4 = ($tbq4[0]['title_bible_quote4'] == $tbq4[$a]['id_title_bible_quote4']) ? 'selected_tbq4' : '';
			$tbq4_select .= '<option value="' . $tbq4[$a]['id_title_bible_quote4'] . '"' . $selected_tbq4 . '>' . $tbq4[$a]['title_bible_quote4'] . '</option>';
		}
		$tbq5_controller = new  TitlesBiblesQuotesController();
		$tbq5 = $tbq5_controller->get5();
		$tbq5_select = '';
		for ($a = 0; $a < count($tbq5); $a++) {
			$selected_tbq5 = ($tbq5[0]['title_bible_quote5'] == $tbq5[$a]['id_title_bible_quote5']) ? 'selected_tbq5' : '';
			$tbq5_select .= '<option value="' . $tbq5[$a]['id_title_bible_quote5'] . '"' . $selected_tbq5 . '>' . $tbq5[$a]['title_bible_quote5'] . '</option>';
		}
		$tbq6_controller = new  TitlesBiblesQuotesController();
		$tbq6 = $tbq6_controller->get6();
		$tbq6_select = '';
		for ($a = 0; $a < count($tbq6); $a++) {
			$selected_tbq6 = ($tbq6[0]['title_bible_quote6'] == $tbq6[$a]['id_title_bible_quote6']) ? 'selected_tbq6' : '';
			$tbq6_select .= '<option value="' . $tbq6[$a]['id_title_bible_quote6'] . '"' . $selected_tbq6 . '>' . $tbq6[$a]['title_bible_quote6'] . '</option>';
		}
		$tbq7_controller = new  TitlesBiblesQuotesController();
		$tbq7 = $tbq7_controller->get7();
		$tbq7_select = '';
		for ($a = 0; $a < count($tbq7); $a++) {
			$selected_tbq7 = ($tbq7[0]['title_bible_quote7'] == $tbq7[$a]['id_title_bible_quote7']) ? 'selected_tbq7' : '';
			$tbq7_select .= '<option value="' . $tbq7[$a]['id_title_bible_quote7'] . '"' . $selected_tbq7 . '>' . $tbq7[$a]['title_bible_quote7'] . '</option>';
		}
		$tbq8_controller = new  TitlesBiblesQuotesController();
		$tbq8 = $tbq8_controller->get8();
		$tbq8_select = '';
		for ($a = 0; $a < count($tbq8); $a++) {
			$selected_tbq8 = ($tbq8[0]['title_bible_quote8'] == $tbq8[$a]['id_title_bible_quote8']) ? 'selected_tbq8' : '';
			$tbq8_select .= '<option value="' . $tbq8[$a]['id_title_bible_quote8'] . '"' . $selected_tbq8 . '>' . $tbq8[$a]['title_bible_quote8'] . '</option>';
		}
		$bq1_controller = new  BiblesQuotesController();
		$bq1 = $bq1_controller->get1();
		$bq1_select = '';
		for ($a = 0; $a < count($bq1); $a++) {
			$selected_bq1 = ($bq1[0]['bible_quote1'] == $bq1[$a]['id_bible_quote1']) ? 'selected_bq1' : '';
			$bq1_select .= '<option value="' . $bq1[$a]['id_bible_quote1'] . '"' . $selected_bq1 . '>' . $bq1[$a]['bible_quote1'] . '</option>';
		}
		$bq2_controller = new  BiblesQuotesController();
		$bq2 = $bq2_controller->get2();
		$bq2_select = '';
		for ($a = 0; $a < count($bq2); $a++) {
			$selected_bq2 = ($bq2[0]['bible_quote2'] == $bq2[$a]['id_bible_quote2']) ? 'selected_bq2' : '';
			$bq2_select .= '<option value="' . $bq2[$a]['id_bible_quote2'] . '"' . $selected_bq2 . '>' . $bq2[$a]['bible_quote2'] . '</option>';
		}
		$bq3_controller = new  BiblesQuotesController();
		$bq3 = $bq3_controller->get3();
		$bq3_select = '';
		for ($a = 0; $a < count($bq3); $a++) {
			$selected_bq3 = ($bq3[0]['bible_quote3'] == $bq3[$a]['id_bible_quote3']) ? 'selected_bq3' : '';
			$bq3_select .= '<option value="' . $bq3[$a]['id_bible_quote3'] . '"' . $selected_bq3 . '>' . $bq3[$a]['bible_quote3'] . '</option>';
		}
		$bq4_controller = new  BiblesQuotesController();
		$bq4 = $bq4_controller->get4();
		$bq4_select = '';
		for ($a = 0; $a < count($bq4); $a++) {
			$selected_bq4 = ($bq4[0]['bible_quote4'] == $bq4[$a]['id_bible_quote4']) ? 'selected_bq4' : '';
			$bq4_select .= '<option value="' . $bq4[$a]['id_bible_quote4'] . '"' . $selected_bq4 . '>' . $bq4[$a]['bible_quote4'] . '</option>';
		}
		$bq5_controller = new  BiblesQuotesController();
		$bq5 = $bq5_controller->get5();
		$bq5_select = '';
		for ($a = 0; $a < count($bq5); $a++) {
			$selected_bq5 = ($bq5[0]['bible_quote5'] == $bq5[$a]['id_bible_quote5']) ? 'selected_bq5' : '';
			$bq5_select .= '<option value="' . $bq5[$a]['id_bible_quote5'] . '"' . $selected_bq5 . '>' . $bq5[$a]['bible_quote5'] . '</option>';
		}
		$bq6_controller = new  BiblesQuotesController();
		$bq6 = $bq6_controller->get6();
		$bq6_select = '';
		for ($a = 0; $a < count($bq6); $a++) {
			$selected_bq6 = ($bq6[0]['bible_quote6'] == $bq6[$a]['id_bible_quote6']) ? 'selected_bq6' : '';
			$bq6_select .= '<option value="' . $bq6[$a]['id_bible_quote6'] . '"' . $selected_bq6 . '>' . $bq6[$a]['bible_quote6'] . '</option>';
		}
		$bq7_controller = new  BiblesQuotesController();
		$bq7 = $bq7_controller->get7();
		$bq7_select = '';
		for ($a = 0; $a < count($bq7); $a++) {
			$selected_bq7 = ($bq7[0]['bible_quote7'] == $bq7[$a]['id_bible_quote7']) ? 'selected_bq7' : '';
			$bq7_select .= '<option value="' . $bq7[$a]['id_bible_quote7'] . '"' . $selected_bq7 . '>' . $bq7[$a]['bible_quote7'] . '</option>';
		}
		$bq8_controller = new  BiblesQuotesController();
		$bq8 = $bq8_controller->get8();
		$bq8_select = '';
		for ($a = 0; $a < count($bq8); $a++) {
			$selected_bq8 = ($bq8[0]['bible_quote8'] == $bq8[$a]['id_bible_quote8']) ? 'selected_bq8' : '';
			$bq8_select .= '<option value="' . $bq8[$a]['id_bible_quote8'] . '"' . $selected_bq8 . '>' . $bq8[$a]['bible_quote8'] . '</option>';
		}

		print('<div class="container-fluid list div-himnos"><h2 class="p1">Editar Lección</h2></div>');

		$template_lc = '

<div class="row container">
	<input class="btn btn-outline-dark col-sm-12 col-md-4 hymn particle button-return2" type="button" value="Regresar" onclick="history.back()">
</div>

<div class="container">

<div class="col-md-12">
			
			<form method="POST" class="">
			<div class="form-group">
				<div class="">
					<input type="hidden" placeholder="id_lesson" value="%s" required>
					<input type="hidden" name="id_lesson" value="%s">
				</div>
				<div class="">
					<input class="form-control" type="text" name="number_lesson" placeholder="Número de lección" value="%s" required>
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
				<select class="custom-select" name="id_verse" placeholder="Títulos de versos" required>
					<option value="">Título de verso</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_verses_text" placeholder="Textos de versos" required>
					<option value="">Texto de verso</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bibles_reading" placeholder="Títulos de lecturas bíblicas" required>
					<option value="">Título de lectura bíblica</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bibles_reading_text" placeholder="Textos de lecturas bíblicas" required>
					<option value="">Texto de lectura bíblica</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_objective" placeholder="Objetivos" required>
					<option value="">Objetivo</option>
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
				<select class="custom-select" name="id_question1" placeholder="Pregintas 1" required>
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
					%s
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
				<select class="custom-select" name="id_question7" placeholder="Preguntas 7" required>
					<option value="">Pregunta 7</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_question8" placeholder="Preguntas 8" required>
					<option value="">Pregunta 8</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote1" placeholder="Títulos de citas bíblicas 1" required>
					<option value="">Título de cita bíblica 1</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote2" placeholder="Títulos de citas bíblicas 2" required>
					<option value="">Título de cita bíblica 2</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote3" placeholder="Títulos de citas bíblicas 3" required>
					<option value="">Título de cita bíblica 3</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote4" placeholder="Títulos de citas bíblicas 4" required>
					<option value="">Título de cita bíblica 4</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote5" placeholder="Títulos de citas bíblicas 5" required>
					<option value="">Título de cita bíblica 5</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote6" placeholder="Títulos de citas bíblicas 6" required>
					<option value="">Título de cita bíblica 6</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote7" placeholder="Títulos de citas bíblicas 7" required>
					<option value="">Título de cita bíblica 7</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_title_bible_quote8" placeholder="Títulos de citas bíblicas 8" required>
					<option value="">Título de cita bíblica 8</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote1" placeholder="Textos de citas bíblicas 1" required>
					<option value="">Texto de cita bíblica 1</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote2" placeholder="Textos de citas bíblicas 2" required>
					<option value="">Texto de cita bíblica 2</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote3" placeholder="Textos de citas bíblicas 3" required>
					<option value="">Texto de cita bíblica 3</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote4" placeholder="Textos de citas bíblicas 4" required>
					<option value="">Texto de cita bíblica 4</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote5" placeholder="Textos de citas bíblicas 5" required>
					<option value="">Texto de cita bíblica 5</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote6" placeholder="Textos de citas bíblicas 6" required>
					<option value="">Texto de cita bíblica 6</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote7" placeholder="Textos de citas bíblicas 7" required>
					<option value="">Texto de cita bíblica 7</option>
					%s
				</select>
			</div>
			<div class="">
				<select class="custom-select" name="id_bible_quote8" placeholder="Textos de citas bíblicas 8" required>
					<option value="">Texto de cita bíblica 8</option>
					%s
				</select>
			</div>
				
				<div class="p_25">
					<input class="btn btn-outline-dark col-sm-12 col-md-6 hymn particle marginq" type="submit" value="Editar">
					<input type="hidden" name="r" value="lesson-edit">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
			</div>

</div>
</div>
		';

		printf(
			$template_lc,
			$lc[0]['id_lesson'],
			$lc[0]['id_lesson'],
			$lc[0]['number_lesson'],
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
	}
} else if ($_POST['r'] == 'lesson-edit'   && $_POST['crud'] == 'set') {

	$save_lc = array(
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

	$lc = $lc_controller->set($save_lc);

	$template = '
		<div class="container">
			<p class="item  edit">Lección <b>%s</b> salvado</p>
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
