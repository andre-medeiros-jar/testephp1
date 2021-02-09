<?php
$nome = "André";
$nome .= " Luis de Medeiros Jar"; // equivale a $nome = $nome + " Luis ...";
echo $nome; //Retorna André Luis de Medeiros Jar
$num1 = 50.0;
$num2 = 50;
var_dump($num1 == $num2); //retorna true
var_dump($num1 === $num2); //retorna false
?>