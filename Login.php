<?php
session_start();
$senha=$_POST['senha'];
$email=$_POST['email'];
$conexão=mysqli_connect('localhost','root','','teste_PHP');
$busca=mysqli_query($conexão,"SELECT*FROM login WHERE email='$email' and senha='$senha'");
$contagem=mysqli_num_rows($busca);

if($contagem==1){
    $_SESSION['Log']=1;
    header("Location: Logado.php");

}
else{
     $_SESSION['Log']='0';
    echo "Você não está logado >:(";
    header("Location: Logado.php");
}
?>
