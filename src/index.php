<?php # phpinfo(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Estética - Home </title>

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <header>
        <a href="#">Menu</a>
        <h1>
            <img src="https://placehold.co/520x520?text=Logo" alt="">
        </h1>
    </header>

    <div id="cadastro_news">
        <h2>
            Cadastre-se para receber nossas novidades!
        </h2>

        <!-- Envio síncrono quando é feito direto pelo html -->
        <form action="app/processa_news.php" method="POST">

            <label class="esconde" for="email">Seu melhor e e-mail</label>
            <input type="email" name="email" id="email" placeholder="Seu melhor e-mail" required>

            <input type="checkbox" id="termos" required>
            <label for="termos">Concordo que meus dados serão armazenados e tratados de acordo com a Política de
                Privacidade.</label>

            <button>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#1f1f1f">
                    <path
                        d="m720-160-56-56 63-64H560v-80h167l-63-64 56-56 160 160-160 160ZM160-280q-33 0-56.5-23.5T80-360v-400q0-33 23.5-56.5T160-840h520q33 0 56.5 23.5T760-760v204q-10-2-20-3t-20-1q-10 0-20 .5t-20 2.5v-147L416-520 160-703v343h323q-2 10-2.5 20t-.5 20q0 10 1 20t3 20H160Zm58-480 198 142 204-142H218Zm-58 400v-400 400Z" />
                </svg>Cadastrar
            </button>

        </form>

    </div>

</body>

</html>