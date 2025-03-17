<?php
$servername = "br612.hostgator.com.br";
$username = "hubsap45_usrmetaper";
$password = "f!R3@2o2XXV";
$dbname = "hubsap45_bd_metaper";

// Ativa relatórios de erros detalhados
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// CRIA A CONEXÃO COM O BANCO DE DADOS 
$conn = new mysqli($servername, $username, $password, $dbname);

// VERIFICA SE A CONEXÃO FOI ESTABELECIDA COM SUCESSO
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Exemplo de uso de conexão (como uma consulta)
echo "Conexão bem-sucedida!";
?>
