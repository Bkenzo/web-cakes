<?php 
    include('layout/html_header.php');
    include('layout/nav.php');

    // rotas (routes) - roteamento
    $pag = "inicio";

    if(isset($_GET['p'])){
        $pag = $_GET['p'];
    }

    if(empty($_POST) == false){
        var_dump($_POST);
    }
    

    switch ($pag) {
        case 'inicio':
            include('inicio.php');
            break;

        case 'empresa':
            include('empresa.php');
            break;

        case 'servicos':
            include('servicos.php');
            break;

        case 'contatos':
            include('contatos.php');
            break;        

        default:
            include('inicio.php');
            break;
    }

   
    include('layout/footer.php');
    include('layout/html_footer.php');


    