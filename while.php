<?php
$total = 150;
$desconto = 0.9;

do  {
    $total *= $desconto; //está dando 10% de desconto
} while ($total > 100);
echo $total; //retorna 98.415
?>