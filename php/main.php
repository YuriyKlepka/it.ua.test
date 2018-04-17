<?php
//Task 1
$array = array('Apple',55,'Mandarin','Banana',-2,'Potato',0,'','Mandarin',1994,'Banana','Kiwi');

function simpleFunction(array &$array = array(),int $number) { //Использовал гугл, так как рание не сталкивался с явным указанием типов на Php, но знаком c этим с языка Java
    $array[] = $number;
}
simpleFunction($array,12);

//Task 2
$a = 10.67;
$b = 31.21;
//echo intval ( $a + $b ); = 41

//Task 3
$deal_id = 387;
$url = "/crm/deal/#deal_id#/";
$url = str_replace('#deal_id#',$deal_id,$url);
/*header("Location: $url");
exit;*/

//Task4
function deleteEmptyCells($array) { //Удаляет с массива все пустые ячейки
    foreach ($array as  $key => $value) {
        if(empty($value)) unset($array[$key]);
    }
    return $array;
}
//print_r(deleteEmptyCells($array));

function concatAllElements($array) { //Сумирует все ячейки массива в одну строку разделяя их слешом /
    $elementsSum = '';
    foreach ($array as $value) {
        $elementsSum .=$value.'/';
    }
    return $elementsSum;
}
//echo concatAllElements($array);

function getMaxValue($array) {  //возвращает максимальный числовой елемент массива если такой имеется
    $maxValue = null;
    foreach ($array as $value) {
        if((is_numeric($value) && $maxValue < $value) || (is_numeric($value) && $maxValue === null)) {
            $maxValue = $value;
        }
    }
    return $maxValue;
    //return max($array);
}
//echo getMaxValue($array);

function getMinValue($array) { //возвращает ключ минимального числовой елемента массива если такой имеется
    $minValue = null;
    $minValueKey = null;
    foreach ($array as $key => $value) {
        if((is_numeric($value) && $minValue > $value) || (is_numeric($value) && $minValue === null)) {
            $minValue = $value;
            $minValueKey = $key;
        }
    }
    return $minValueKey;
    //return array_keys($array, min($array))[0]; или так :D
}

//echo $array[getMinValue($array)];

function arrayUnique($array) { //удаляет повторяющиеся елементы с массива
    $uniqueArray = array();
    foreach ($array as $key => $value) {
        $marker = true;
        foreach ($uniqueArray as $keyTwo => $valueTwo) {
            if($valueTwo === $value) $marker = false;
        }
        if($marker) $uniqueArray[$key] = $value;
    }


    return $uniqueArray;
}
//print_r(arrayUnique($array));

//Task 5 гуглил таблицу с форматами
$birthYear = 1994;
while ($birthYear != date('Y')) {
    //echo $birthYear;
    $birthYear++;
}