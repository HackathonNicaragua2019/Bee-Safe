<?php include('header.php'); ?>
    <div class="contenedor">
        <form action="" class="formularioLoging">
            <input type="text" placeholder="Nombre" name="nombreUsuario">
            <input type="text" placeholder="Contraseña" name="contraseñaUsuario">
            <input type="submit" value="Iniciar">
            <input type="button" value="Registrar" onclick="windows.location.href='register.php'">
        </form>
    </div>
<?php include('footer.php'); ?>