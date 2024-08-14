<?php include 'includes/redirect.php';?>
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

function setValueField($data, $field, $textarea = false) {
    if(isset($data) && count($data)>=1 ){
        if($textarea){
            echo htmlspecialchars($data[$field]);
        }else{
            echo "value='" . htmlspecialchars($data[$field]) . "'";
        }
    }
}

if(!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: index.php');
}

$id = $_GET['id'];
$user_query = mysqli_query($db, "SELECT * FROM users where usuario_id = '$id';");
$user = mysqli_fetch_assoc($user_query);

if(!isset($user['usuario_id']) || empty($user['usuario_id'])){
    header('Location: index.php');
}
?>

<?php

$errors = [];

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

    $image = null;
    if(isset($_FILES['image'])  && !empty($_FILES['image']['tmp_name'])){

        if(!is_dir("uploads")){
            $dir = mkdir("uploads",0777,true);
        }else{
            $dir = true;
        }

        if($dir){
            $filename = time().'-'.$_FILES['image']['name'];
            $muf = move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$filename);

            $image = $filename;

            if($muf){
                $image_upload =  true;
            }else{
                $image_upload =  false;
                $errors['image'] = 'La imagena no se ha cargado bien';
            }

        }

    }

    // actualizar usuario

    if(count($errors)<=1){
        $sql = "update users set name='{$_POST["name"]}', apellidos='{$_POST["surname"]}', biografia='{$_POST["bio"]}',email='{$_POST["email"]}',";

        if(isset($_POST["password"]) && !empty($_POST["password"])){
            $sql .= "password='".sha1($_POST["password"])."',";
        }

        if(isset($_FILES['image'])  && !empty($_FILES['image']['tmp_name'])){
            $sql .= "imagen='{$image}',";
        }

        $sql .= "role='{$_POST["role"]}' WHERE usuario_id='{$user["usuario_id"]}';";

        $update_user = mysqli_query($db, $sql);

        if($update_user){
            $user_query = mysqli_query($db, "SELECT * FROM users where usuario_id = '$id';");
            $user = mysqli_fetch_assoc($user_query);
        }

    }else{
        $update_user = false;
    }
}
?>


<h2>Editar usuario <?php echo $user['usuario_id']." - ".$user['name']." ".$user['apellidos']; ?></h2>

<?php if(count($errors) <=1  && isset($_POST['submit']) && $update_user != false){ ?>
    <div class="alert alert-success">
        El usuario se ha modificado correctamente
    </div>
<?php }else if ($_POST["submit"]){ ?>
    <div class="alert alert-danger">
        El usuario NO se ha modificado
    </div>
<?php } ?>

<form action="" method="POST" class="form" enctype="multipart/form-data">

    <label for="name">
        Nombre:
        <input type="text" name="name" class="form-control" <?php setValueField($user, 'name'); ?> />
        <?php echo showError($errors,"name"); ?>
    </label>
    <br>
    <label for="surname">
        Apellidos:
        <input type="text" name="surname" class="form-control" <?php setValueField($user, 'apellidos'); ?>>
        <?php echo showError($errors,"surname"); ?>
    </label>
    <br>
    <label for="bio">
        Biografia:
        <textarea name="bio" class="form-control" <?php setValueField($user, 'biografia',true); ?>></textarea>
        <?php echo showError($errors,"bio"); ?>
    </label>
    <br>
    <label for="email">
        Email:
        <input type="email" name="email" class="form-control" <?php setValueField($user, 'email'); ?>>
        <?php echo showError($errors,"email"); ?>
    </label>
    <br>
    <label for="image">
        Actualizar Imagen de perfil:
        <input type="file" name="image" class="form-control" >
        Imagen de perfil:
        <?php if($user['imagen'] != null){ ?>
            <img src="uploads/<?php echo $user['imagen'] ?>" width="120"/>
        <?php } ?>

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
            <option <?php if($user["role"] == "Normal"){ echo "selected";} ?> >Normal</option>
            <option <?php if($user["role"] == "Administrador"){ echo "selected";} ?> >Administrador</option>
        </select>
        <?php echo showError($errors,"role"); ?>
    </label>
    <br/>
    <input type="submit" value="Enviar" name="submit" class="btn btn-success">
</form>

<?php require_once 'includes/footer.php'; ?>