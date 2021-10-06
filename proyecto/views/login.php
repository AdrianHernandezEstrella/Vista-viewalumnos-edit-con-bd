<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
<h3>No tiene permisos para entrar a la página <h3>
<?php
}else {?>
<br>
<br>

<div class="row">
    <div class="col s12 m6 offset-m4">
        <form action="./controller/login.php" method="post">
            <div class="row card-panel z-depth-4">
                <div class="input-field col s12">
                    <i class="material-icons prefix">face</i>
                    <input type="text" placeholder="Ingresa tu cuenta de usuario" id="usuario" name="usuario" class="validate" required />
                    <label for="usuario">Usuario:</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock_open</i>
                    <input type="password" id="pwd" name="password" class="validate" required />
                    <label for="usuario">Contraseña:</label>
                </div>
                <button class="btn blue right">
                    <i class="material-icons left">login</i>
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>
<?php } ?>