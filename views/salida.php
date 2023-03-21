<?php
if (isset($_POST['txtbusca'])) :
    include "conexion.php";
    $user = new ApptivaDB();
    $u = $user->buscar("himnos", " pagina_0 like '%" . $_POST['txtbusca'] . "%'");
    $html = "";
    foreach ($u as $v)
        $html .= "<p>" . $v['pagina_0'] . "</p>";
    echo $html;
else :
    echo "Error";
endif;
