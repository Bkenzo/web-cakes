<?php

 include 'gestor.php';

 $gestor = new Gestor();
 $dados = $gestor->EXE_QUERY("SELECT * FROM avaliacao");

 
 echo '<pre>';
 var_dump($dados);

 die('TERMINADO');