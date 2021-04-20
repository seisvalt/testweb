<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Programador */

$this->registerJSFile(Yii::getAlias('@web') . '/js/save_Data.js',[
    'position' => View::POS_END,

]);

$this->title = Yii::t('app', 'Nuevo Programador');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Programadores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
