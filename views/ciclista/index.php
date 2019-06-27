<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CiclistaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciclistas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclista-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ciclista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dorsal',
            'nombre',
            'edad',
            'nomequipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
