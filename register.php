<?php include('header.php'); ?>
    <div class="contenedor">
        <form action="guardarUsuarios.php" method="POST">
            <input type="text" name="nombreUsuario" class="textNombre" id="TxtNombre" placeholder="Nombre">
            <input type="text" name="passwordUsuario" class="textNombre" id="TxtNombre" placeholder="Contraseña">
            <input type="text" name="cedulaUsuario" class="textNombre" id="TxtNombre" placeholder="Cedula">
            <input type="hidden" name="distritoUsuario" value="1">
            <textarea name="descripcionUsuario" id="" cols="30" rows="10" placeholder="Descripcion de Usuario no mas de 250 caracteres"></textarea>
            <input type="hidden" name="tipoUsuario" value="3">
            <input type="submit" value="Guardar">
        </form>
    </div>
<?php include('footer.php'); ?>