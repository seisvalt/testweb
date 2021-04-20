<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Programadores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programador-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Programador'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            ['label' => 'Nombres', 'attribute' => 'name'],
            ['label' => 'Apellidos', 'attribute' => 'last_name'],
            ['label' => 'Cédula', 'attribute' => 'dni'],
            ['label' => 'Correo Electrónico', 'attribute' => 'email'],
            ['label' => 'Lenguajes', 'attribute' => 'languages'],
            ['label' => 'Creado', 'attribute' => 'createdAt'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
