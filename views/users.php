<?php
print('<h2 class="p1">GESTIÓN DE USUARIOS</h2>');

$user_controller = new UsersController();
$user = $user_controller->get();

if (empty($user)) {
	print('
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
			<h3 class="centrartexto padding-versiculo">No hay Usuarios.</h3>
		</form>
	</div>
</div>
		<script>
			window.onload = function (){
				reloadPage("home")
			}
		</script>
	');
} else {
	$template_user = '
	<div class="">
		<table>
			<tr>
				<th>Id de usuario</th>
                <th>Nombre</th>
                <th>Password</th>
				<th>Img url</th>
                <th>Rol</th>
				<th colspan="2">
					<form method="POST">
						<input type="hidden" name="r" value="user-add">
						<input class="" type="submit" value="Agregar">
					</form>
				</th>
			</tr>';

	for ($n = 0; $n < count($user); $n++) {
		$template_user .= '
			<tr>
				<td>' . $user[$n]['id_user'] . '</td>
				<td>' . $user[$n]['user'] . '</td>
                <td>' . $user[$n]['password'] . '</td>
				<td>' . $user[$n]['img'] . '</td>
                <td>' . $user[$n]['role'] . '</td>
				<td>
					<form method="POST">
						<input type="hidden" name="r" value="user-edit">
						<input type="hidden" name="user" value="' . $user[$n]['user'] . '">
						<input type="hidden" name="role" value="' . $user[$n]['role'] . '">
						<input class="button  edit" type="submit" value="Editar">
					</form>
				</td>
				<td>
					<form method="POST">
						<input type="hidden" name="r" value="user-delete">
						<input type="hidden" name="user" value="' . $user[$n]['user'] . '">
						<input type="hidden" name="role" value="' . $user[$n]['role'] . '">
						<input class="button  delete" type="submit" value="Eliminar">
					</form>
				</td>
			</tr>
		';
	}

	$template_user .= '
		</table>
	</div>
	';

	print($template_user);
}
