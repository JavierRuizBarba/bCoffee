<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposPagos */

$this->title = 'Update Tipos Pagos: ' . $model->IDtipo;
$this->params['breadcrumbs'][] = ['label' => 'Tipos Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDtipo, 'url' => ['view', 'id' => $model->IDtipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipos-pagos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
