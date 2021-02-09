<?php
/*function ola($texto){
    echo "Olá $texto <br />";
}

echo ola("seja bem vindo ao sistema");*/

/*function ola() {
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia", "Boa tarde", "Boa noite"));
*/
/*$pessoa = array (
    'nome' => 'André Jar',
    'idade' => 45
);

foreach ($pessoa as &$value) {
    if (gettype($value) === 'integer') $value += 10;
    echo $value.'<br>'; //vai retornar 55
}*/
function soma(float ...$valores):string{
    return array_sum($valores);
}

echo soma(15.1, 45.2, 50.1); //retorna 110.4
echo "<br />";
echo soma(1.5, 4.5); //retorna 6
?>