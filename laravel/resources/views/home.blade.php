<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <style>

        /* Aplica variáveis na raiz do html */
        :root {
            --corTexto: #333;
            --bs-primary-rgb: 255, 255, 255;
            --bs-secondary-rgb: 198, 147, 248; /*64, 198, 239;*/
            --bs-light-rgb: 255, 255, 255;
            --bs-dark-rgb: 121, 32, 176;
        }

        * {
            box-sizing: border-box;
            max-width: 100%;
            color: rgb( var( --bs-dark-rgb ) );
        }

        img{
            width: 100%;
            max-width: 100%;
        }

        .conteudos {
            width: calc( ( 100vw / 12 * 10 ) - 2.6rem );
            background-color: rgba(var(--bs-secondary-rgb), 0.4) !important;
            box-shadow: inset 0 0 1rem rgba(255, 255, 255, 0.4);
            border: solid 0.1rem rgba(var(--bs-secondary-rgb), 1 );
        }

        .meio 
        {
            width: 20vw;
            aspect-ratio: 1/1;
            background: red;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>

</head>
<body>

    <main class=" bg-primary p-3 d-flex flex-row " style="height: 100vh;" >

        <section class=" col-2 h-100 navbar navbar-expand navbar-light bg-light d-flex flex-column rounded-1 " >
            <!-- navbrand -->
            <h1 class="container-fluid" >

                <a class="navbar-brand" href="{{ config('app.url') }}">
                    <img src="https://placehold.co/1920x1080?text=Logo" alt="Logotipo">
                </a>

                <button class=" btn btn-outline-light " >
                    <span class="navbar-toggler-icon" ></span>
                </button>

            </h1>

            <nav class=" w-100 ">
                
                <a class=" nav-link w-100 p-2 mb-2 " href="{{ config('app.url') }}">
                    <span class="h4 ps-3 fw-normal " >
                        <i class=" bi bi-speedometer2 me-3 "></i> Painel
                    </span>
                </a>

                <a class=" nav-link w-100 p-2 mb-2 " href="{{ config('app.url') }}">
                    <span class="h4 ps-3 fw-normal " >
                        <i class=" bi bi-person-circle me-3 "></i> Usuários
                    </span>
                </a>

                <a class=" nav-link w-100 p-2 mb-2 " href="{{ config('app.url') }}">
                    <span class="h4 ps-3 fw-normal " >
                        <i class=" bi bi-newspaper me-3 "></i> Novidades
                    </span>
                </a>

            </nav>

        </section>

        <section class=" col-10 bg-secondary ms-3 conteudos rounded-1 " > Conteúdos </section> 
           
    </main>
    
    
</body>
</html>

