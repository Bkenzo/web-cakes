
<?php
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
?>


<h1 class=" text-center">Fale Comigo!</h1>

<form action="?p=contatos" method="post">
    <input type="text" name="text_email" placeholder="Email"><br>
    <input type="text" name="text_assunto" placeholder="Assunto" required><br>
    <textarea name="text_mensagem" cols="50" rows="10" required></textarea>
    <input type="submit" value="Enviar Mensagem">
</form>

<?php if(!empty($erro)):?>
    <div style="color: red;"><?php echo $erro; ?></div>
<?php endif; ?>

