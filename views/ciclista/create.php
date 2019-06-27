<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ciclista */

$this->title = 'Create Ciclista';
$this->params['breadcrumbs'][] = ['label' => 'Ciclistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclista-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
