<?php
if ($_POST['r'] == 'user-add'   && !isset($_POST['crud'])) {
	print('
		<h2 class="">Agregar Usuario</h2>
		<form method="POST" class="">
			<div class="">
				<input type="hidden" name="id_user" value="0">
			</div>
			<div class="">
				<input type="text" name="user" placeholder="Nombre de usuario" required>
			</div>
			<div class="">
				<input type="text" name="password" placeholder="Password" required>
			</div>
			<div class="">
				<input type="text" name="img" placeholder="Ruta de imagen" required>
			</div>
			<div class="">
				<input type="radio" name="role" id="admin" value="admin" required><label for="admin">Administrador</label>
				<input type="radio" name="role" id="noadmin" value="user" required><label for="noadmin">Usuario</label>
			</div>
			<div class="">
				<input  class="" type="submit" value="Agregar">
				<input type="hidden" name="r" value="user-add">
				<input type="hidden" name="crud" value="set">
			</div>
		</form>
	');
} else if ($_POST['r'] == 'user-add'   && $_POST['crud'] == 'set') {
	$users_controller = new UsersController();

	$new_user = array(
		'id_user' => $_POST['id_user'],
		'user' =>  $_POST['user'],
		'password' =>  $_POST['password'],
		'img' =>  $_POST['img'],
		'role' =>  $_POST['role'],
	);

	$user = $users_controller->set($new_user);

	$template = '
		<div class="">
			<p class="">Usuario <b>%s</b> salvado</p>
			<p class="">Usuario <b>%s</b> salvado</p>
			<p class="">Usuario <b>%s</b> salvado</p>
			<p class="">Usuario <b>%s</b> salvado</p>
			<p class="">Usuario <b>%s</b> salvado</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("users")
			}
		</script>
	';

	printf($template, $_POST['id_user'], $_POST['user'], $_POST['password'], $_POST['img'], $_POST['role']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}