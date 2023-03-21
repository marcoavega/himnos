<?php

if ($_POST['r'] == 'hymn-young' && isset($_POST['id_himno'])) {

	$hl_controller = new HymnYoungListController();

	$hl = $hl_controller->get($_POST['id_himno']);

	if (empty($hl)) {
		printf('
<div class="container">
	<div class="col-md-12 home">
		<form method="POST" class="">
			<h3 class="centrartexto padding-versiculo">Error al cargar la información del himno %s</h3>
		</form>
	</div>
</div>
<script>
	window.onload = function () {
		reloadPage("hymn-young")
	}
</script>
', $_POST['id_himno']);
	} else {

		$datos = [
			"hl" => $hl
		];
		foreach ($datos["hl"] as $hl) : ?>

			<div class="reveal">
				<div class="center1">
					<h5><?php echo $hl['pagina_0']; ?></h5>
				</div>
				<div class="slides">

					<?php
					for ($n = 0; $n <= 12; $n++) {
						$p = "pagina_" . $n;
						if (!empty($hl[$p])) {
							echo "<section>";
							echo "<div id=''><text><h1>" . $hl[$p] . "</h1>";
							echo "<h4>" . $n . " de " . $hl['num'] . "</h4></text></div>";
							echo "</section>";
						}
					}
					?>

				</div>
			</div>

<?php endforeach;
	}
} else {
	$controller = new ViewController();
	$controller->load_view('error404');
}
