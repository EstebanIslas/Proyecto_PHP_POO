<h1>Registrarse</h1>

<!--Mostrar Sesión de Registro-->
<?php if(isset($_SESSION['register']) && $_SESSION['register']): ?>
    <strong>Usuario Registrado Correctamente</strong>
<?php else:?>
    <strong>Fallo al Registrar Usuario</strong>
<?php endif;?>

<!--Formulario que va al metodo del controlador save -->
<form action="<?=base_url?>usuario/save" method="POST">
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos" required>

    <label for="email">Correo</label>
    <input type="email" name="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <input type="submit" value="Registrarse">
</form>