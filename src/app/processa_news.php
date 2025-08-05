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
    $email = $_POST['email'];

    echo "<h2> {$email} </h2>";
    echo "<h3>" . $email . "</h3>";
    echo '<h3>' . $email . '</h3>';



?>