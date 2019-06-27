<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Consultas de Seleccion 1';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Consultas de seleccion 1</h1>

        <p class="lead">Hoja de ejercicios de MYSQL</p>
        
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h4>Todos Ciclistas</h4>
                <?= Html::a('Ejecutar consulta', ['ciclista/consulta'], ['class' => 'btn btn-primary btn-large']) ?>
            
            </div>
            <div class="col-lg-4">
                <h4>Ciclistas(edad)</h4>
                <?= Html::a('Ejecutar consulta', ['ciclista/consulta1'], ['class' => 'btn btn-primary btn-large']) ?>
            </div>
            <div class="col-lg-4">
                <h4>Ciclistas(Artiach)</h4>
                <?= Html::a('Ejecutar consulta', ['ciclista/consulta2'], ['class' => 'btn btn-primary btn-large']) ?>
            </div>
            </div>
        </div>

    </div>
</div>
