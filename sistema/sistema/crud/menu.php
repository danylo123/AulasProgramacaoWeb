<!DOCTYPE html>
<html>

<head>
    <?php
    session_start();

    if(empty($_SESSION['usuario'])){
        header("Location: controller/autenticar/sair.php");
    }
    require_once('view/head.php');
    ?>
</head>

<body>
    <?php require_once('view/nav.php'); ?>

    <h3>Bem vindo <?php echo $_SESSION['usuario']; ?>!</h3>

</body>

</html>