<?php

//cria conexão com banco de dados
try{
    $pdo = new PDO('mysql:host=localhost; dbname=sistema_satisfacao', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão bem sucedida";
}catch(PDOException $e){
    echo "Erro de Conexão";
}

//Função para Inserir Dados no banco

function Inserir($escolha){
    $pdo = $GLOBALS["pdo"]; 
    $data = date('y-m-d'); 
    $sql = $pdo->prepare("INSERT INTO avaliacao VALUES (null, ?, ?)");
    $sql->execute(array($escolha, $data));
}

//Função para consultar o Banco
    function consultar($opcao){
        $pdo = $GLOBALS["pdo"];
        $sql = $pdo->prepare("SELECT COUNT(*) FROM avaliacao WHERE escolha = '$opcao'");
        $sql->execute();
        $retorno = $sql->fetchAll();

        foreach($retorno as $key => $value){
            echo $value['COUNT(*)'];
        }
    }

?>