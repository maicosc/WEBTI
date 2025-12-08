<?php

$nums = [34, 25, 46, 2, 8, 4];

$soma = 0;

for ($i = 0; $i < count($nums); $i++){
    $soma = $soma + $nums[$i];
}

echo "<pre>";
echo "Soma dos valores: ". $soma ."\n";
echo "Maior valor: ". max($nums)."\n";
echo "Menor valor: ". min($nums)."";
?>