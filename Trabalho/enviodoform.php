<style>
table, th, td {
  border: 1px solid black;
}
</style>
<?php
$nome = $_POST['name'];
$email = $_POST['email'];

if (isset($_POST['sim'])) {
    $autenticacao = "sim";
} else {
    $autenticacao = "nao";
}
$select = $_POST['fase_graduacao'];
switch ($select) {
    case 0:
        $selection = "1. Fase";
        break;
    case 1:
        $selection = "2. Fase";
        break;
    case 2:
        $selection = "3. Fase";
        break;
    case 3:
        $selection = "4. Fase";
        break;
}
$obs = $_POST['observacao'];
if ($obs == "" || $obs == "Digite aqui...") // daria pra usar empty(), e else if, porém optei por esse
{
    $obs = "Nenhuma descrição associada";
}


$array = array( array("nome" =>$nome, "email" => $email,"autenticacao"=>$autenticacao,"select"=>$selection,"observação"=>$obs)
);













echo '<table>';
echo "<thead>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>E-mail</th>";
echo "<th>Trabalhou</th>";
echo "<th>Fase</th>";
echo "<th>OBS</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>$nome</td>";
echo "<td>$email</td>";
echo "<td>$autenticacao</td>";
echo "<td>$selection</td>";
echo "<td>$obs</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

















//if (!empty($obter_dados)) {
    // file_put_contents("matriculas.json", json_encode($array),FILE_APPEND);
    // $obter_dados = file_get_contents("matriculas.json");
    // $jason_array = json_decode($obter_dados,true);
    // $obter_dados = array($obter_dados);
    // echo "<pre>";
    // print_r($obter_dados);
    // echo "</pre>";
//} else {
    
        
//}





/*
$obter_dados = file_get_contents("matriculas.json");
    if(!empty($obter_dados))
    {
        file_put_contents("matriculas.json", json_encode($aDadosAluno),FILE_APPEND);
        $obter_dados = file_get_contents("matriculas.json");
        $jason_array = json_decode($obter_dados,true);
        $obter_dados = array($obter_dados);
        echo "<pre>";
        print_r($obter_dados);
        echo "</pre>";
    }
    else
    {
        file_put_contents("matriculas.json", json_encode($aDadosAluno));
        $obter_dados = file_get_contents("matriculas.json");
        echo "<pre>";
        print_r($obter_dados);
        echo "</pre>";
    }
*/


// $aDadosAluno = $_POST;
// $obter_dados = file_get_contents("matriculas.json");
// $jason_array = json_decode($obter_dados,true);
// file_put_contents("matriculas.json", json_encode($jason_array + $aDadosAluno));
// $obter_dados = file_get_contents("matriculas.json");
// $jason_array = json_decode($obter_dados,true);
//  echo "<pre>";
//  print_r($jason_array);
//  echo "</pre>";






// require_once("index.php");
