<?php
$senha=$_POST['senha'];
$email=$_POST['email'];
$conexão=mysqli_connect('localhost','root','','teste_PHP');
$busca=mysqli_query($conexão,"SELECT*FROM login WHERE email='$email' and senha='$senha'");

$contagem=mysqli_num_rows($busca);

if($contagem==1){
    echo "Tu estás logado de forma perpetua";
}
else{
    echo "Você não está logado >:(";
}
?>