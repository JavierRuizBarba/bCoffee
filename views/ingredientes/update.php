<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ingredientes */

$this->title = 'Update Ingredientes: ' . $model->IDingredientes;
$this->params['breadcrumbs'][] = ['label' => 'Ingredientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDingredientes, 'url' => ['view', 'id' => $model->IDingredientes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ingredientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
