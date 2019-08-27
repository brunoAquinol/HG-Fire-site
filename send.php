<script>
    <?
    $for = "br.aquino.oliveira@gmail.com";
    $subject = "Contato através do site...";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $corpo = "<html><body>";
    $corpo .= "Nome: $name ";
    $corpo .= "Email: $email";
    $corpo .= "Mensagem: $message";
    $corpo .= "</body></html>";

    $email_headers = implode("\n", array("From: $name", "Reply-To: $email", "Subject: $subject", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

    if(!empty($name) && !empty($email) && !empty($message)){
        mail($for, $subject, $corpo, $email_headers);
        $msg = "Email enviado com sucesso!";
        echo "<script>alert('$msg');window.location.assign('http://localhost/HG-FIRE/solid/index.HTML?');</script>";
    }else{
        $msg = "Erro no Envio de Contato!";
        echo "<script>alert('$msg');window.location.assign('http://localhost/HG-FIRE/solid/index.HTML?');</script>";
    }
    ?>
</script>