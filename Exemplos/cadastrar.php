<?php
// listar os dados salvos
$oMatriculaAtual = $_POST;
$aDadosAluno = array();

$oDados = file_get_contents("matriculas.json");

// se tem dados, carrega os dados
if($oDados){
    $aDadosAluno = json_decode($oDados);

    // array de dados
    $html_table = "<table style='border: thick double #6a0573;'>";
    $html_table .= "<th>Nome</th>";
    $html_table .= "<th>SobreNome</th>";
    $html_table .= "<th>Idade</th>";
    $html_table .= "<th>Usuario</th>";

    foreach ($aDadosAluno as $aluno){
        // inicia a linha
        $html_table .= "<tr>";

        // campos
        $html_table .= "<td>" . $aluno->nome . "</td>";
        $html_table .= "<td>" . $aluno->sobrenome . "</td>";
        $html_table .= "<td>" . $aluno->idade . "</td>";
        $html_table .= "<td>" . $aluno->usuario . "</td>";

        // finaliza a linha
        $html_table .= "</tr>";
    }

    $html_table .=  "<table>";

    echo $html_table;

} else {
    // senao grava os dados pela primeira vez
    array_push($aDadosAluno, $oMatriculaAtual);

    file_put_contents("matriculas.json", json_encode($aDadosAluno));
}










$nome = $_POST["nome"];

$senha = $_POST["senha"];
$status_login = $_POST["status_login"];

echo "status do login: " . $status_login . "<br>";

$atualizacao = isset($_POST["atualizacao"]) ? $_POST["atualizacao"] : false;

$pode_receber_atualizacao = false;

if($atualizacao) {
    echo ' variavel "atualizacao" está setada';
    if ($atualizacao == "on") {
        $pode_receber_atualizacao = true;
        echo '<br> pode receber atualizacao';
    } else {
        echo 'nao pode receber atualizacao';
    }
} else {
    echo ' variavel "atualizacao" nao setada';
    echo '<br>nao pode receber atualizacao';
}

echo "<br>Pessoa sendo cadastrada:<br><b>" . $nome . "</b>";
echo "<br>Senha:<br><b>" . $senha . "</b>";

$texto_atualizacao = $pode_receber_atualizacao ? "Sim" : "Não";

echo "<br>Aceita atualização?:<br><b>" . $texto_atualizacao . "</b>";

echo '<br><br><a href="index.php"> Voltar</a>';

