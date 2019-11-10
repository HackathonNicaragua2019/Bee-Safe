<?php include('header.php'); ?>
    <form action="guardarUsuarios.php" method="post">
        <input type="text" name="nombre" class="textNombre" id="TxtNombre" placeholder="Nombre">
        <input type="text" name="password" class="textNombre" id="TxtNombre" placeholder="Contraseña">
        <input type="text" name="cedula" class="textNombre" id="TxtNombre" placeholder="Cedula">
        <input type="text" name="password" class="textNombre" id="TxtNombre" placeholder="Cedula">
        <input type="submit" value="Guardar">
    </form>
<?php include('footer.php'); ?>