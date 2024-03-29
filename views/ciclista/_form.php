<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ciclista */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ciclista-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dorsal')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'nomequipo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
