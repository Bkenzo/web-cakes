
<?php
/*
// validação do formulário
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $erro = '';

        // verifica se existem todos os campos
        if(!isset($_POST['text_email']) ||
            !isset($_POST['text_assunto']) ||
            !isset($_POST['text_mensagem'])){
            
            $erro = 'Pelo menos um dos campos não existem.';
        }

        // ver se os campos estão preenchidos
        if(empty($erro)){
            
            $email = $_POST['text_email'];
            $assunto = $_POST['text_assunto'];
            $mensagem = $_POST['text_mensagem'];
        
             // ver se o email é valido
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erro = 'Endereço de email inválido.';
            }
        }
        

        // envio de email
    }
    */
?>

<form name="formteste" action="" method="post">

<h1>Contato</h1>

<p class="nome">
 <input type="text" name="nome" placeholder="informe seu nome" required="required">
 </p>

<p class="email">
 <input type="email" name="email" placeholder="informe seu email" required="required">
 </p>

<p class="assunto">
 <input type="text" name="assunto" placeholder="informe o assunto" required="required">
 </p>

<p class="mensagem">
 <textarea name="mensagem" placeholder="deixe sua mensagem"></textarea>
 </p>

<p class="enviar">
 <input type="submit" name="enviar" value="Enviar">
 </p>

</form>


<?php if(!empty($erro)):?>
    <div style="color: red;"><?php echo $erro; ?></div>
<?php endif; ?>



