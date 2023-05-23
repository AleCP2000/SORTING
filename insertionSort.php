<?php
function insertionSort($arreglo){
    for ($i=0; $i < count($arreglo); $i++) { 
        $valor = $arreglo[$i];
        $j= $i -1;
        while($j >= 0 && $valor < $arreglo[$j]){
            //intercambio
            $arreglo[$j+1] = $arreglo[$j];
            $arreglo[$j] = $valor;
            $j = $j-1;
        }
    }
    print_r($arreglo);
}
insertionSort([5,10,8,1,3]);
?>