<?php

$hl_controller = new HymnListController();
$hl = $hl_controller->get();


if (empty($hl)) {
    print('
		<div class="">
			<p class="">No hay himnos.</p>
		</div>
	');
} else {

    print('<div class="container-fluid list div-himnos"><h2 class="p1">Himnario</h2></div>');
?>

<!doctype html>
<html lang="es">

<head>
    <script src="./views/dist/js/jquery-2.1.4.js" type="text/javascript"></script>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="./views/dist/css/jquery-ui.css" />
    <script type="text/javascript">
    $(document).ready(function() {
        (function($) {
            $('#FiltrarContenido').keyup(function() {
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapida tr').hide();
                $('.BusquedaRapida tr').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
    </script>
</head>

<body>



    <!-- Begin page content -->


    <div class="col-12 col-md-12">

        <!-- Contenido -->


        <div class="input-group mb-12 col-md-6 search">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Buscar</span>
            </div>
            <input id="FiltrarContenido" type="text" class="form-control" placeholder="Buscar himno" aria-label="Alumno"
                aria-describedby="basic-addon1">
        </div>
        <div class='scrollbar scrollbar2'>
            <table class="table table-hover">

                <tbody class="BusquedaRapida">
                    <?php
                        include "db.php";
                        $con = connect();
                        $consulta = "SELECT * FROM himnos";
                        $resultado = mysqli_query($con, $consulta);
                        $contador = 0;

                        while ($misdatos = mysqli_fetch_assoc($resultado)) {
                            $contador++;

                        ?>

                    <tr class="bt col-sm-12 col-md-6">
                        <td class="bt col-sm-12 col-md-12">

                            <form class='list  col-md-12' target='_blank' method='POST'>
                                <input type='hidden' name='r' value='hymn'>
                                <input type='hidden' name='id_himno' value='<?php echo $misdatos['id_himno']; ?>'>

                                <button class="btnbtn btn-outline-dark col-sm-12 col-md-12 hymn particle" type='submit'
                                    value=''><?php echo $misdatos['pagina_0']; ?></button>

                            </form>

                        </td>
                    </tr>



                    <?php } ?>

                </tbody>
            </table>
        </div>
        <!-- Fin Contenido -->
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src=" ./views/dist/js/jquery-3.3.1.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write(
        '<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

</body>

</html>

<?php
    for ($n = 0; $n < count($hl); $n++) {
    }
}