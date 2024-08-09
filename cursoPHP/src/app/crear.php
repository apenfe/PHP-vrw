<?php require_once 'includes/header.php'; ?>

<?php

function showError($errors,$field) {

    if(isset($errors[$field]) && !empty($field)){
        $alert = '<div class="alert alert-danger" style="margin-top: 10px">'.$errors[$field].'</div>';
    }else{
        $alert = '';
    }

    return $alert;
}

$errors = null;

if(isset($_POST["submit"])){

    if(!empty($_POST['name']) && strlen($_POST['name']) <= 20 && !is_numeric($_POST['name']) && !preg_match("/[0-9]/",$_POST['name'])){
        $name_validate = true;
    }else{
        $name_validate = false;
        $errors['name'] = 'El nonbre no es valido';
    }

    if(!empty($_POST['surname']) && !is_numeric($_POST['surname']) && !preg_match("/[0-9]/",$_POST['surname'])){
        $surname_validate = true;
    }else{
        $surname_validate = false;
        $errors['surname'] = 'El apellido no es valido';
    }

    if(!empty($_POST['bio'])){
        $bio_validate = true;
    }else{
        $bio_validate = false;
        $errors['bio'] = 'La biografía no es valida';
    }

    if(!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else{
        $email_validate = false;
        $errors['email'] = 'El email no es valido';
    }

    if(!empty($_POST['password']) && strlen($_POST['password']) >= 6){
        $password_validate = true;
    }else{
        $password_validate = false;
        $errors['password'] = 'La contraseña no es valida';
    }

    if(!empty($_POST['role'])){
        $role_validate = true;
    }else{
        $role_validate = false;
        $errors['role'] = 'El rol no es valido';
    }

    if(isset($_FILES['image'])  && !empty($_FILES['image']['tmp_name'])){
        $role_validate = true;
    }else{
        $role_validate = false;
        $errors['img'] = 'La imagen no es valida';
    }
}
?>


<h2>Crear usuarios</h2>

<form action="crear.php" method="POST" enctype="multipart/form-data">

    <label for="name">
        Nombre:
        <input type="text" name="name" class="form-control">
        <?php echo showError($errors,"name"); ?>
    </label>
    <br>
    <label for="surname">
        Apellidos:
        <input type="text" name="surname" class="form-control">
        <?php echo showError($errors,"surname"); ?>
    </label>
    <br>
    <label for="bio">
        Biografia:
        <textarea name="bio" class="form-control"></textarea>
        <?php echo showError($errors,"bio"); ?>
    </label>
    <br>
    <label for="email">
        Email:
        <input type="email" name="email" class="form-control">
        <?php echo showError($errors,"email"); ?>
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
        <?php echo showError($errors,"password"); ?>
    </label>
    <br>
    <label for="role">
        Rol:
        <select name="role" class="form-control">
            <option>Normal</option>
            <option>Administrador</option>
        </select>
        <?php echo showError($errors,"role"); ?>
    </label>
    <br/>
    <input type="submit" value="Enviar" name="submit" class="btn btn-success">
</form>

<?php require_once 'includes/footer.php'; ?>