<?php include('header.php'); ?>
    <div class="contenedor" id="contenedorLogin">
        <form action="" class="formularioLoging">
            <input type="text" placeholder="Nombre" name="nombreUsuario" class="textLogin">
            <input type="text" placeholder="Contraseña" name="contraseñaUsuario" class="textLogin">
            <input type="submit" value="Iniciar" class="inputBotonLogin">
            <input type="button" value="Registrar" onclick="goRegistro()" class="inputBotonLogin">
        </form>
    </div>
<?php include('footer.php'); ?>