<?php
$brc_controller = new BiblesReadingsController();

if ($_POST['r'] == 'capture-lessons-edit-bible_reading'   && !isset($_POST['crud'])) {

    $brc = $brc_controller->get($_POST['title_reading']);

    if (empty($brc)) {
        $template = '
			<div class="">
				<p class="">No existe título de la lectura <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

        printf($template, $_POST['title_reading']);
    } else {

        $name_lesson_controller = new LessonsTitlesController();
        $name_lesson = $name_lesson_controller->get();
        $name_lesson_select = '';
        for ($a = 0; $a < count($name_lesson); $a++) {
            $selected = ($brc[0]['name_lesson'] == $name_lesson[$a]['name_lesson']) ? 'selected' : '';
            $name_lesson_select .= '<option value="' . $name_lesson[$a]['id_lesson_title'] . '"' . $selected . '>' . $name_lesson[$a]['name_lesson'] . '</option>';
        }

        $template_brc = '
			<h2 class="">Editar objetivo</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="id_bibles_reading" value="%s" disabled required>
					<input type="hidden" name="id_bibles_reading" value="%s">
				</div>
				<div class="">
					<input type="text" name="title_reading" placeholder="Título lectura bíblica" value="%s" required>
				</div>
				<div class="">
					<select name="name_lesson" placeholder="name_lesson" required>
						<option value="">name_lesson</option>
						%s
					</select>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-bible_reading">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

        printf(
            $template_brc,
            $brc[0]['id_bibles_reading'],
            $brc[0]['id_bibles_reading'],
            $brc[0]['title_reading'],
            $name_lesson_select,
        );
    }
} else if ($_POST['r'] == 'capture-lessons-edit-bible_reading'   && $_POST['crud'] == 'set') {

    $save_brc = array(
        'id_bibles_reading' =>  $_POST['id_bibles_reading'],
        'title_reading' =>  $_POST['title_reading'],
        'name_lesson' =>  $_POST['name_lesson'],
    );

    $brc = $brc_controller->set($save_brc);

    $template = '
		<div class="container">
			<p class="item  edit">Título lectura bíblica <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

    printf($template, $_POST['title_reading']);
} else {
    $controller = new ViewController();
    $controller->load_view('error401');
}
