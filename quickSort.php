<?php
echo "<h3>Ejemplo de QuickSort() ordenando arreglo de menor a mayor</h3><br>";
function quickSort($arreglo){
    //validando que el arreglo tenga más de  un valor
    if (count($arreglo) <= 1) {
        return $arreglo;
    }else{
        $privote = $arreglo[0];
        $left = array();
        $right = array();

        for ($i=1; $i < count($arreglo); $i++) { 
            if ($arreglo[$i] < $privote) {
                array_push($left, $arreglo[$i]);
            }else {
                array_push($right, $arreglo[$i]);
            }
        }

        //fusionando los arreglos más el privotecon array_merge()
        return array_merge(quickSort($left), array($privote), quickSort($right));
    }
}

print_r(quickSort([10,8,20,5]));

echo "<br><h3>Ejemplo de QuickSort() ordenando arreglo tomando como base la última posición</h3><br>";

function quickSort2($arreglo2){
    //validando que el arreglo tenga más de  un valor
    if (count($arreglo2) <= 1) {
        return $arreglo2;
    }else{
        //tomando en cuenta la última posición del arreglo como privote utilizando end()
        $privote2 = end($arreglo2);
        $left2 = array();
        $right2 = array();

        for ($j=0; $j < count($arreglo2) - 1; $j++) { 
            if ($arreglo2[$j] < $privote2) {
                array_push($left2, $arreglo2[$j]);
            }else {
                array_push($right2, $arreglo2[$j]);
            }
        }

        //fusionando los arreglos más el privote con array_merge()
        return array_merge(quickSort2($left2), array($privote2), quickSort2($right2));
    }
}

print_r(quickSort2([10,8,20,5]));

?> 