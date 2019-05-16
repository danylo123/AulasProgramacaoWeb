<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exemple Method Post/Get</title>
    </head>
    <body>
        <form name="cadastro" method="POST" action="cadastro.php">
            <div>
                <label>Nome: </label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" />
            </div>

            <div>
                <label>E-mail: </label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" />
            </div>

            <div>
                <label>Senha: </label>
                <input type="password" id="senha" name="senha" placeholder="Digite uma senha" />
            </div>

            <div>
                <label>Observação: </label>
                <textarea id="observacao" name="observacao"></textarea>
            </div>

            <div>
                <input type="submit" name="btEnviar" id="btEnviar" value="Cadastrar">
            </div>

        </form>

    </body>

</html>