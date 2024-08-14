<?php
include 'includes/redirect.php';
include 'includes/header.php'; // si pongo require_once permite cargarlo solo una vez

$users = mysqli_query($db, "SELECT * FROM users;");

?>

<table class="table">
    <tr>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Email</td>
        <td>Ver/Editar</td>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($users)){ ?>
    <tr>

        <td><?= $row['name']?></td>
        <td><?= $row['apellidos']?></td>
        <td><?= $row['email']?></td>
        <td>
            <a href="ver.php?id=<?=$row["usuario_id"]?>" class="btn btn-success">Ver</a>
            <a href="editar.php?id=<?=$row["usuario_id"]?>" class="btn btn-warning">Editar</a>
        </td>

    </tr>
    <?php } ?>

</table>

<?php
include 'includes/footer.php';
?>
