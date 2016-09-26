<?php
    $nome      =  $_POST['nome'];
    $email     =  $_POST['email'];
    $ddd       =  $_POST['ddd'];
    $tel       =  $_POST['tel'];
    $assunto   =  $_POST['assunto'];
    $msg       =  $_POST['msg'];
    

    $headers   =  "From: $email\r\n";
    $headers  .=  "Reply-to: $email\r\n";

    $corpo     = "Formulário enviado do Site\n";
    $corpo    .= "Nome: " . $name . "\n";
    $corpo    .= "Email: " . $email . "\n";
    $corpo    .= "telefone: " .$ddd. " " .$tel. "\n";
    $corpo    .= "Comentários: " . $message . "\n";

    $email_to = "robson@jrnovo.com";
        $status = mail($email_to, $subject, $corpo, $headers); 
            if($status = true) {
                echo "<script> alert('Sua mensagem foi enviada com sucesso.'); </script>";
            }
            else {
                echo "<script> alert('Ocorreu um erro ao enviar seu formulario. Por favor tente novamente.'); </script>";
            }
            
            echo "<script> window.location.href = 'http://www.jrnovo.com/contato.html';</script>";

?>
