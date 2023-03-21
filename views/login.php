<?php
print('
<form class="" method="post">
<div class="">
    <input type="text" name="user" placeholder="Nombre de usuario" required>
</div>
<div class="">
    <input type="password" name="password" placeholder="contraseña" required>
</div>
<div class="">
    <input type="submit" class="button" value="Enviar">
</div>
</form>
');

if (isset($_GET['error'])) {
    $template = '
<div class="">
    <p class="">%s</p>
</div>';
    printf($template, $_GET["error"]);
}