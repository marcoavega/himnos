<?php
$users_controller = new UsersController();

if ($_POST['r'] == 'user-edit'   && !isset($_POST['crud'])) {

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
		$role_admin = ($user[0]['role'] == 'admin') ? 'checked' : '';
		$role_user = ($user[0]['role'] == 'user') ? 'checked' : '';

		$template_user = '
			<h2 class="">Editar Usuario</h2>
			<form method="POST" class="">
				<div class="">
					<input type="text" placeholder="Id" value="%s" disabled required>
					<input type="hidden" name="id_user" value="%s">
				</div>
				<div class="">
					<input type="text" name="user" placeholder="user" value="%s" required>
				</div>
				<div class="">
					<input type="text" name="img" placeholder="Ruta de imagen" value="%s" required>
				</div>
				<div class="">
					<input type="password" name="password" placeholder="password" value="%s" required>
				</div>
				<div class="p_25">
					<input type="radio" name="role" id="admin" value="admin" %s required><label for="admin">Administrador</label>
					<input type="radio" name="role" id="noadmin" value="user" %s required><label for="noadmin">Usuario</label>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="user-edit">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_user,
			$user[0]['id_user'],
			$user[0]['id_user'],
			$user[0]['user'],
			$user[0]['img'],
			$user[0]['password'],
			//$user[0]['pass'],
			$role_admin,
			$role_user
		);
	}
} else if ($_POST['r'] == 'user-edit'   && $_POST['crud'] == 'set') {

	$save_user = array(
		'id_user' =>  $_POST['id_user'],
		'user' =>  $_POST['user'],
		'img' =>  $_POST['img'],
		'password' =>  $_POST['password'],
		'role' =>  $_POST['role']
	);

	$user = $users_controller->set($save_user);

	$template = '
		<div class="container">
			<p class="item  edit">Usuario <b>%s</b> salvado</p>
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