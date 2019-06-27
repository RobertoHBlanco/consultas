<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CiclistaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ciclista-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dorsal') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'edad') ?>

    <?= $form->field($model, 'nomequipo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
