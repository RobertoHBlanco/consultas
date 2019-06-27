<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ciclista */

$this->title = 'Update Ciclista: ' . $model->dorsal;
$this->params['breadcrumbs'][] = ['label' => 'Ciclistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dorsal, 'url' => ['view', 'id' => $model->dorsal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ciclista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
