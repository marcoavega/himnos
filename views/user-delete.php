<?php
$users_controller = new UsersController();

if ($_POST['r'] == 'user-delete'   && !isset($_POST['crud'])) {

	$user = $users_controller->get($_POST['user']);

	if (empty($user)) {
		$template = '
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
				<h3 class="centrartexto padding-versiculo">No existe el usuario %s</h3>
		</form>
	</div>
</div>
<script>
	window.onload = function (){
		reloadPage("users")
	}
</script>
		';

		printf($template, $_POST['user']);
	} else {
		$template_user = '
			<h2 class="">Eliminar Usuario</h2>
			<form method="POST" class="">
				<div class="">
					¿Estas seguro de eliminar el Usuario: 
					<mark class="">%s</mark>?
				</div>
				<div class="">
					<input  class="" type="submit" value="SI">
					<input class="" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="user" value="%s">
					<input type="hidden" name="r" value="user-delete">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_user,
			$user[0]['user'],
			$user[0]['user']
		);
	}
} else if ($_POST['r'] == 'user-delete'   && $_POST['crud'] == 'del') {

	$user = $users_controller->del($_POST['user']);

	$template = '
		<div class="container">
			<p class="item  delete">Usuario <b>%s</b> eliminado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("users")
			}
		</script>
	';

	printf($template, $_POST['user']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}