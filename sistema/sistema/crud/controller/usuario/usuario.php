<!DOCTYPE html>
<html>

<head>
    <?php
    require_once('../../view/head.php');
    ?>
</head>

<body>
    <?php
    require_once('../../view/nav.php');
    ?>

    <div class="container">

        <div class="row justify-content-center bg-light">
            <form action="usuarioDAO.php" method="POST">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nivel">Nivel de acesso</label>
                    <select class="form-control" id="nivel" name="nivel" required>
                        <option>Selecione</option>
                        <option value="1">Administrador</option>
                        <option value="2">Moderador</option>
                        <option value="3">Cliente</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" name="salvar">Salvar</button>
                </div>
            </form>
        </div>

        <?php
            require_once('../banco/conexao.php');

            $resultado = $conexao->query("SELECT * FROM usuario") or die (mysqli_error($conexao));        

        ?>

        <div class="row justify-content-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Senha</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <?php while($row = $resultado->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <td><?php echo $row['senha']; ?></td>
                    <td>
                        <a href="#" class="btn btn-info">Editar</a>
                        <a href="usuarioDAO.php?excluir=<?php echo $row['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </table>

        </div>


    </div>
</body>

</html>