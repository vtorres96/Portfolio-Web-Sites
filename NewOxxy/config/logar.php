<?php
include 'config/conn.php';

if(isset($_REQUEST['logar'])){
$usuario = $_REQUEST['usuario'];
$senha   = $_REQUEST['senha'];

$sql = "SELECT * FROM login WHERE usuario ='$usuario' AND senha = '$senha' ";
$result = $conn->query($sql);

if($result->num_rows == 0){
	echo '<p style="color:red;">Senha errada</p>';	
	}else{		
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha']   = $senha;		
		header("Location: admin/acesso.php");		
		}
}
?>