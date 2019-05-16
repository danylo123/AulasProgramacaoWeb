<?php

if (empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha']) or empty($_POST['observacao'])) {
    echo "<script type='text/javascript'> alert('Existem campos obrigatórios que não foram preenchidos, por gentileza, preencha todos e em seguida, clique em cadastrar. Obrigado! xD!');";
    echo "javascript:window.location='index.php';</script>";
}

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$observacao = $_POST['observacao'];

if (strlen($nome) >= 10) {
    echo $nome . "<br>";
    echo strlen($nome) . "<br>";
} else {
    echo "<script type='text/javascript'> alert('Nome muito curto');";
    echo "javascript:window.location='index.php';</script>";
}


echo "<br>";
echo $email;
echo "<br>";
echo $senha;
echo "<br>";
echo $observacao;
