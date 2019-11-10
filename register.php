<?php include('header.php'); ?>
    <div class="contenedor" id="contenedorRegistro">
        <form action="guardarUsuario.php" method="POST" class="forularioRegistro">
            <input type="text" name="nombreUsuario" class="textNombre" id="TxtNombre" placeholder="Nombre">
            <input type="password" name="passwordUsuario" class="textNombre" id="TxtNombre" placeholder="Contraseña">
            <input type="text" name="cedulaUsuario" class="textNombre" id="TxtNombre" placeholder="Cedula:161XXXX000XN">
            <input type="hidden" name="distritoUsuario" value="1">
            <textarea name="descripcionUsuario" id="" cols="30" rows="10" placeholder="Descripcion de Usuario no mas de 250 caracteres" class="textNombre" id="areTexto1"></textarea>
            <input type="hidden" name="tipoUsuario" value="3">
            <input type="submit" value="Registrar" class="inputButton">
        </form>
    </div>
<?php include('footer.php'); ?>