<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <link href="{{asset('css/painel.css')}}" rel="stylesheet" >

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <style>

        

        /* Tabela dinâmica 
        .table {
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        thead.table-dark th {
            background-color: #0d6efd !important; /* Azul Bootstrap * /
            color: #fff !important;
            text-align: center;
        }

        tbody tr:hover {
            background-color: #f1f5ff; /* leve destaque no hover * /
            transition: background 0.3s ease;
        }

        td {
            vertical-align: middle;
            text-align: center;
        }

        /* Customização dos botões de paginação * /
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            border-radius: 0.3rem;
            margin: 0 2px;
            padding: 5px 10px;
            border: 1px solid #dee2e6;
            background-color: #fff;
            color: #0d6efd !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #0d6efd !important;
            color: #fff !important;
            border: none;
        }

        .dataTables_wrapper .dataTables_filter input {
            border-radius: 0.3rem;
            border: 1px solid #ced4da;
            padding: 5px 10px;
            margin-left: 0.5rem;
        }*/

        








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

        <!-- col-2 tamanho de 2colunas na tela pequena <576px -->
         <!-- col-md-X maior do que 768 -->
        <section class=" col-1 col-md-3 h-100 navbar navbar-expand navbar-light bg-light d-flex flex-column rounded-1 overflow-hidden menu_lateral" id="menu_lateral" >
            <!-- navbrand -->
            
            <button class=" btn btn-outline-dark d-block d-sm-none btn_menu " id="btn_menu" >
                    <span class="navbar-toggler-icon" ></span>
            </button>

            <h1 class="container-fluid" >
                <a class="navbar-brand" href="{{ config('app.url') }}">
                    <img class="col-12" src="https://placehold.co/1920x1080?text=Logo" alt="Logotipo">
                </a>
            </h1>

            <nav class=" w-100 ">
                
                <a class=" nav-link w-100 p-2 mb-2 " href="{{ config('app.url') }}/painel">
                    <span class="h4 ps-md-3 fw-normal " >
                        <i class=" bi bi-speedometer2 me-3 "></i> <span class="d-none d-md-inline-block" > Painel </span>
                    </span>
                </a>

                <a class=" nav-link w-100 p-2 mb-2 " href="{{ config('app.url') }}/usuarios">
                    <span class="h4 ps-md-3 fw-normal " >
                        <i class=" bi bi-person-circle me-3 "></i> <span class="d-none d-md-inline-block" > Usuários </span>
                    </span>
                </a>

                <a class=" nav-link w-100 p-2 mb-2 " href="{{ config('app.url') }}/novidades">
                    <span class="h4 ps-md-3 fw-normal " >
                        <i class=" bi bi-newspaper me-3 "></i> <span class="d-none d-md-inline-block" >Novidades</span>
                    </span>
                </a>

            </nav>

        </section>

        <section class=" col-10 bg-secondary ms-3 conteudos rounded-1 " >
            <!-- Área que será alterada em cada página -->
            @yield('conteudos')
        </section> 
           
    </main>
    
    <script type="text/javascript">

        document.addEventListener('DOMContentLoaded', function(){

            // pegar o botão do menu
            let menu_btn = document.querySelector('#btn_menu');

            // observar o clique
            menu_btn.addEventListener('click', function(){
                
                document.querySelector("#menu_lateral").classList.toggle('abre');

                // aplicamos css aos textos
                let links = document.querySelectorAll(" nav i + span ");
                
                links.forEach( function( item ){
                    // Laço de Repetição
                    item.classList.toggle('mostra');
                } );

            });

        });

    </script>
    
</body>
</html>

