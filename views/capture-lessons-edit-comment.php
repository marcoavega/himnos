<?php
$cc_controller = new CommentsController();

if ($_POST['r'] == 'capture-lessons-edit-comment'   && !isset($_POST['crud'])) {

	$cc = $cc_controller->get($_POST['comment']);

	if (empty($cc)) {
		$template = '
			<div class="">
				<p class="">No existe el comentario <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("capture-lessons")
				}
			</script>
		';

		printf($template, $_POST['comment']);
	} else {

		$name_lesson_controller = new LessonsTitlesController();
		$name_lesson = $name_lesson_controller->get();
		$name_lesson_select = '';
		for ($a = 0; $a < count($name_lesson); $a++) {
			$selected = ($cc[0]['name_lesson'] == $name_lesson[$a]['name_lesson']) ? 'selected' : '';
			$name_lesson_select .= '<option value="' . $name_lesson[$a]['id_lesson_title'] . '"' . $selected . '>' . $name_lesson[$a]['name_lesson'] . '</option>';
		}

		$template_cc = '
			<h2 class="">Editar objetivo</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="id_comment" value="%s" disabled required>
					<input type="hidden" name="id_comment" value="%s">
				</div>
				<div class="">
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Comentario" name="comment" required>%s</textarea>
				<input type="text" name="comment" placeholder="Comentario" required>
				</div>
				<div class="">
					<select name="name_lesson" placeholder="name_lesson" required>
						<option value="">name_lesson</option>
						%s
					</select>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="capture-lessons-edit-comment">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_cc,
			$cc[0]['id_comment'],
			$cc[0]['id_comment'],
			$cc[0]['comment'],
			$name_lesson_select,
		);
	}
} else if ($_POST['r'] == 'capture-lessons-edit-comment'   && $_POST['crud'] == 'set') {

	$save_cc = array(
		'id_comment' =>  $_POST['id_comment'],
		'comment' =>  $_POST['comment'],
		'name_lesson' =>  $_POST['name_lesson'],
	);

	$cc = $cc_controller->set($save_cc);

	$template = '
		<div class="container">
			<p class="item  edit">Comentario <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("capture-lessons")
			}
		</script>
	';

	printf($template, $_POST['comment']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}