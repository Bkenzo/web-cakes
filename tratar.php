<?php

    // verificar se os campos existem    
    if(!isset($_POST['text_usuario']) || !isset($_POST['text_senha'])){
        die('Erro - Não existem os campos necessários.');
    }

    // verificar se todos os campos estão preenchidos
    if(empty($_POST['text_usuario'])){
        die('Erro - o usuario tem que ser preenchido.');
    }

    if(empty($_POST['text_senha'])){
        die('Erro - A senha tem que ser preenchida.');
    }

    $usuario = $_POST['text_usuario'];
    $senha = $_POST['text_senha'];
    
    // verificar se o usuário tem entre 5 e 10 caracteres
    if(strlen($usuario) < 3 || strlen($usuario) > 10){
        die('Erro - Usuário tem que ter entre 3 e 10 caracteres.');
    }

    if(strlen($senha) < 3 || strlen($senha) > 16){
        die('Erro - Usuário tem que ter entre 3 e 16 caracteres.');
    }

    // verifica se o usuário e respectiva senha existem
    $u = 'joao';
    $s = '123456';

    if($usuario == $u && $senha == $s){
        die('Login com sucesso.');
    } else {
        die('Login inválido.');
    }
    

    echo 'Usuário: '.$usuario;
    echo '<br>';
    echo 'Senha: '.$senha;
