<?php
$to = 'antonyo.designer@gmail.com';
$subject = "Contato via site - santuariosaofrancisco.com.br";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$msg.= "********************************************************* <br>" ;
$msg.= "E-MAIL DE CONTATO SÃO FRANCISCO <br>" ;
$msg.= "********************************************************* <br>" ;
$msg.= "<br>" ;
$msg.= "<br>" ;
$msg.= "Nome:<br>" ;
$msg.= "$name <br>" ;
$msg.= "<br>" ; 
$msg.= "E-mail:<br>" ;
$msg.= "$email <br>" ;
$msg.= "<br>" ;
$msg.= "Telefone:<br>" ;
$msg.= "$phone <br>" ;
$msg.= "<br>" ;
$msg.= "Mensagem:<br>" ;
$msg.= "$message <br>" ;
$msg.= "<br>" ;

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($to,$subject,$msg,$headers);

echo "<script>location.href='index.php#contato';</script>"; 

?>