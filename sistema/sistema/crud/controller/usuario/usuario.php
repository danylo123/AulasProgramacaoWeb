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

    </div>
</body>

</html>