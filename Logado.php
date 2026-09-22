<?php
session_start();
if($_SESSION['Log']=3){
    echo "Apenas quem está logado pode ver";
    echo "<br>";
    echo "<a href='Deslogar.php'>Deslogue</a>";
}

if ($_SESSION['log']=0) {
    echo "Você errou o E-mail e/ou Senha";
    echo "<a href='Login.php'>Tente Novamente</a>";
}

?>