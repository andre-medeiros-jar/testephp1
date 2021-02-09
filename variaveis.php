<?php
$nome = "André Luis Jar";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    global $nome;
    echo $nome; //vai dar erro
}

teste();
echo("<br />");
teste2();
?>