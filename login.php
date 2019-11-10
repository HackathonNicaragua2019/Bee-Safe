<?php include('header.php'); ?>
    <div class="contenedor" id="contenedorLogin">
        <form action="compararUsuario.php" method="POST" class="formularioLoging">
            <input type="text" placeholder="Nombre" name="nombreUsuario" class="textLogin">
            <input type="password" placeholder="Contraseña" name="passwordUsuario" class="textLogin">
            <input type="submit" value="Iniciar" class="inputBotonLogin" id="btnPrimerBoton">
            <input type="button" value="Registrar" onclick="goRegistro()" class="inputBotonLogin">
        </form>
    </div>
<?php include('footer.php'); ?>