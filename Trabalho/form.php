<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form id="form" name="form" method="POST" action="enviodoform.php">
        <h1>Inscrições desenvolvimento PHP</h1>
        <br>
        <p>Para inscrever-se é necessario preencher o cadastro abaixo:</p>
        <br>
        <label>Nome:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <br>
        <label>E-mail</label>
        <input type="email" name="email" id="email" required>
        <br>
        <p>Já trabalha com desenvolvimento?</p>

        <input type="radio" name="radiobutton" id="radiobutton" value="sim" required>Sim

        <input style="margin-left: 50px;" type="radio" name="radiobutton" value="nao" id="radiobutton" required>Não
        <br><br>
        <label>Fase da Graduação</label>
        <select name="fase_graduacao" id="fase_graduacao" required>
            <option value="0">1. Fase</option>
            <option value="1">2. Fase</option>
            <option value="2">3. Fase</option>
            <option value="3">4. Fase</option>
        </select>
        <br><br><br><br>
        Observações:
        <textarea name="observacao" id="observacao" cols="25" rows="5">Digite aqui...</textarea>
        <br><br>
        <input type="checkbox" name="autenticidade" id="autenticidade" required>
        Confere que as informações acima são autênticas.
        <br><br>
        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
</body>

</html>