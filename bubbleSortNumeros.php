<?php

function bubbleSortNum($array){
    //ciclo que verifica si tengo que volver a entrar en el segundo ciclo para ordenar los elementos
    for ($i=0; $i < count($array); $i++) {
        //ciclo que evalúa elemento por elemento 
        for ($j=0; $j < count($array)-1; $j++) { 
            //comparando  los elementos e intercambiándolos
            if ($array[$j] > $array[$j+1]) {
                //haciendo intercambio
                $variable_temporal = $array[$j + 1];
                $array [$j + 1] = $array[$j];
                $array [$j] = $variable_temporal;
            }
        }
    }
    print_r($array);
}

bubbleSortNum([5,10,8,1,3]);

?>