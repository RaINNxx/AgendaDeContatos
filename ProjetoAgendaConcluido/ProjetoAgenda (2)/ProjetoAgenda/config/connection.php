<?php
 
// Vamos criar Variveis com os dados do banco de dados

$host = "localhost";// aonde eu acho ele 
$dbname = "agenda"; // nome do meu banco de dados 
$user = "root"; // nome do usuario 
$pass = ""; // senha vazia 

try{
    // usando a variavel padrao $conn passamos as variaveis de onde tem os dados do nosso banco 
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Ativar o Erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // O PDOException é quando ha um erro na conexao com banco de dados
}catch(PDOException $e){
     // erro na conexão
     $error = $e ->getMessage();// a variavel error criada recebe a varial $e de exeção que ira mandar uma getMensagem 
     echo "Error na Conexão: $error";

}
