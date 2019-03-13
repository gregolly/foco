

/*
// Trocar os valores abaixo

$emailenvio = 'foco@focotga.com.br';
$assunto = '';
$url = 'https://focotga.com.br';

// Mude até aqui apenas

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$body = "$mensagem\n\n---------------\n\n$assunto\n$nome\n$telefone\n$email";

if ($_POST['leaveblank'] != '' or $_POST['dontchange'] != 'http://') {

  echo "Não foi possível enviar o e-mail. Tente novamente ou entre em contato com " . $emailenvio;
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $url . "'>";

} else if (isset($_POST['email'])) {

require ('./PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->WordWrap = 70;
$mail->addAddress($emailenvio);

$mail->From = $email;
$mail->FromName = $nome;
$mail->AddReplyTo($email, $nome);
$mail->Subject = $assunto;

$mail->Body = $body;

if(!$mail->send()) {
  echo "Não foi possível enviar o e-mail. Tente novamente ou entre em contato com " . $emailenvio;
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $url . "'>";
} else {
  echo "E-mail enviado com sucesso!";
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=" . $url . "'>";
}

}

*/

# alterar a variavel abaixo colocando o seu email

$destinatario = "foco@focotga.com.br";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$assunto = $_REQUEST['assunto'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];


 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto ,$telefone, $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.htm");


?>