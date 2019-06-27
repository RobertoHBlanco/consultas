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
<div class="jumbotron">
        <h2>Listar todos las edades de los ciclistas</h2>
        <div>Select distinct edad from ciclista</div>
</div>

    <?= GridView::widget([
        'dataProvider' => $datos,
        'columns'=>[
            'edad'
        ]
    ]); ?>


</div>
