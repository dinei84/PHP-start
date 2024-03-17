<?php
  
  if(isset($_POST['url']) && strlen($_POST['url']) == '0' ) {
  
    //1 – Definimos Para quem vai ser enviado o email
    $para = "claudinei.trompete@gmail.com"; //SEU E-MAIL
    
    //2 - resgatar o nome digitado no formulário e grava na variavel $nome
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    
    // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
    $assunto = 'Mensagem do Formulário com inputs Animado - Loop Nerd';
    
    //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
    $data      = date('d/m/Y H:i');
    $mensagem .= "<br> <strong>Nome:  </strong>".$_POST['nome'];
    $mensagem .= "<br> <strong>E-mail:  </strong>".$_POST['email'];
    $mensagem .= "<br> <strong>Assunto:  </strong>".$_POST['assunto'];
    $mensagem .= "<br> <strong>Mensagem: </strong>".$_POST['mensagem'];
    $mensagem .= "<br> <strong>Enviado em:  </strong>".$data;
    
    //5 – agora inserimos as codificações corretas e  tudo mais.
    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  Mensagem do site Loop Nerd <claudinei.trompete@gmail.com>\n"; //SEU E-MAIL
    $headers .= "X-Sender:  <claudinei.trompete@gmail.com>\n"; //SEU E-MAIL
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <claudinei.trompete@gmail.com>\n"; //SEU E-MAIL
    $headers .= "Reply-To: ".$email."\n";
    $headers .= "MIME-Version: 1.0\n";
    mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
    echo '
            <div style="max-width:320px; padding:50px; border:3px solid #3399FF; color:#3399FF; font-family: tahoma; background:#E9F8FB; text-align:center; font-weight:800; margin:180px auto;">
           
              <p style="font-size:1.3em;">'.$nome.', obrigado!</p> 
              <p style="font-size:1.1em;">Sua mensagem enviada com sucesso !</p>
            
            </div>
          ';
    echo    '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=index.html">';
    exit; 
  
  }//Fecha verifica se é url vazia

?>