<?php
$servername = "";
$username = "###";
$password = "###";
$dbname = "###";

// CRIA A CONEXÃO DO BANCO DE DADOS 
$conn = new mysqli($servername, $username, $password, $dbname);

// VERIFICA SE A CONXÃO ESTÁ CERTA E CASO HAJA ERRO ELE MOSTRA QUAL FOI 
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
