<?php

    // Aqui dentro apenas código PHP
    /* Bloco de comentário */
    # comentário de linha única

    # Sintaxe
    // Entrada de dados é feita pelo form HTML
    // Comandos de saída abaixo:
    # echo '<h1>Seu texto aqui </h1>'; 
    # print('<h1> Usei o print </h1>');

    # Temos a supervariável $_POST 

    # "dumpa" expõe o conteúdo de um vetor (array)
    # var_dump( $_POST );

    # string "texto" - number 10 1.5 - boolean true false - object - vetores - null 
    
    # Recebemos o dado do formulário HTML e armazenamos na variável $email 
    $email = $_POST['email'];

    # echo "<h2> {$email} </h2>";
    # echo "<h3>" . $email . "</h3>";
    # echo '<h3>' . $email . '</h3>';

    # Conectando ao Banco de Dados via PDO()
    $conexao = new PDO( "mysql:host=db;dbname=estetica_t99;port=3306","root","root" );

$sql_cria_tabela = "CREATE TABLE IF NOT EXISTS news ( 
    id_news INT(255) NOT NULL DEFAULT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(254) NOT NULL UNIQUE,
    validado INT(1) NOT NULL DEFAULT 0,
    data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)";




?>