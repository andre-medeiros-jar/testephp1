<form>
<input type="text" name="Nome">
<input type="date" name="DataNascimento">
<input type="submit" value="Processar">
</form>

<?php
if (isset($_GET)) //verifica se foi realizado o clique no botão SUBMIT
{
    foreach ($_GET as $campo => $valor) {
        echo "Nome do campo: " . $campo;
        echo "Valor do campo: " . $valor;
        echo "<hr />";
    }
}
?>