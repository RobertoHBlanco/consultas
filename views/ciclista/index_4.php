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
        <h2>Listar todos los ciclistas del equipo Artiach y Amore Vita</h2>
        <div>Select * from ciclista where nomequipo = 'Artiach' or nomequipo = 'Amore Vita'</div>
</div>

    <?= GridView::widget([
        'dataProvider' => $datos,
        'columns'=>[
            'edad'
        ]
    ]); ?>


</div>
