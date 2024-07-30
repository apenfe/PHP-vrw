<?php require_once 'includes/header.php'; ?>

<h2>Crear usuarios</h2>

<form action="recibir.php" method="POST" enctype="multipart/form-data">

    <label for="name">
        Nombre:
        <input type="text" name="name" class="form-control">
    </label>
    <br>
    <label for="surname">
        Apellidos:
        <input type="text" name="surname" class="form-control">
    </label>
    <br>
    <label for="bio">
        Biografia:
        <textarea name="bio" class="form-control"></textarea>
    </label>
    <br>
    <label for="image">
        Imagen:
        <input type="file" name="image" class="form-control">
    </label>
    <br>
    <label for="password">
        Contraseña:
        <input type="password" name="password" class="form-control">
    </label>
    <br>
    <label for="role">
        Rol:
        <select name="role" class="form-control">
            <option>Normal</option>
            <option>Administrador</option>
        </select>
    </label>
    <br/>
    <input type="submit" value="Enviar" name="submit" class="btn btn-success">
</form>

<?php require_once 'includes/footer.php'; ?>