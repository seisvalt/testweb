<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Programador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->label('Apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dni')->label('Cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->label('Correo Electronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'languages')->label('Lenguajes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::Button(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success', 'onclick' => 'guardar()' ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
