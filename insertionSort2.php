<?php

function insertionSort2($arreglo){
    for ($i=0; $i < count($arreglo); $i++) { 
        $valor_posicion = $arreglo[$i];
        $j= $i -1;
        while($j >= 0 && $valor_posicion < $arreglo[$j]){
            //intercambio
            $arreglo[$j+1] = $arreglo[$j];
            $arreglo[$j] = $valor_posicion;
            $j = $j-1;
        }
    }
    print_r($arreglo);
}
insertionSort2([10,8,20,5]);
?>