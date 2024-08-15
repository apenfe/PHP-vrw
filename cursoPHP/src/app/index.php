<?php
include 'includes/redirect.php';
include 'includes/header.php'; // si pongo require_once permite cargarlo solo una vez

$users = mysqli_query($db, "SELECT * FROM users;");
$num_total_users = mysqli_num_rows($users);

if($num_total_users > 0){
    $rows_per_page = 3;
    $page = false;

    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }

    if(!$page){
        $start = 0;
        $page = 1;
    }else{
        $start = ($page - 1) * $rows_per_page;
    }

    $total_pages = ceil($num_total_users / $rows_per_page);

    $sql = "SELECT * FROM users ORDER BY usuario_id DESC LIMIT {$start}, {$rows_per_page};";
    $users = mysqli_query($db, $sql);

}else{
    echo "No hay usuarios registrados";
}

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

            <?php if(isset($_SESSION['logged']) && $_SESSION['logged']['role'] == 'Administrador'){ ?>
                <a href="borrar.php?id=<?=$row["usuario_id"]?>" class="btn btn-danger">Borrar</a>
            <?php } ?>

        </td>

    </tr>
    <?php } ?>

</table>

<?php if($num_total_users >=1 ) { ?>

    <ul class="pagination">

        <?php if($page == 1){ ?>
            <li class="page-item disabled"><a href="?page=<?= $page-1 ?>" class="page-link"><<</a></li>
        <?php }else{ ?>
            <li class="page-item"><a href="?page=<?= $page-1 ?>" class="page-link"><<</a></li>
        <?php } ?>

        <?php for($i = 1; $i <= $total_pages; $i++){ ?>

            <?php if($page == $i){ ?>
                <li class="page-item disabled"><a href="#" class="page-link"><?= $i ?></a></li>
            <?php }else{ ?>
                <li class="page-item"><a href="?page=<?= $i ?>" class="page-link"><?= $i ?></a></li>
            <?php } ?>

        <?php } ?>

        <?php if($page == $total_pages){ ?>
            <li class="page-item disabled"><a href="?page=<?= $page+1 ?>" class="page-link">>></a></li>
        <?php }else{ ?>
            <li class="page-item"><a href="?page=<?= $page+1 ?>" class="page-link">>></a></li>
        <?php } ?>

    </ul>

<?php } ?>

<?php
include 'includes/footer.php';
?>
