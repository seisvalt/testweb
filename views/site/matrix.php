<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

 function absoluto( $array) {
    $diagonalI = 0;
    $diagonalJ = 0;

    for ($i = 0; sizeof($array) > $i; $i++) {
        $diagonalI += $array[$i][$i];
        $diagonalJ += $array[$i][sizeof($array)  - ($i + 1)];
    }
    return abs($diagonalI - $diagonalJ);
}

$ejemplo = [
        [1,2,3],
    [4,5,6],
    [9,8,9]
];

echo "diferencia" . absoluto($ejemplo);
?>