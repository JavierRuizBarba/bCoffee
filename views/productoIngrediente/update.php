<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoIngrediente */

$this->title = 'Update Producto Ingrediente: ' . $model->IDproductoIngre;
$this->params['breadcrumbs'][] = ['label' => 'Producto Ingredientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDproductoIngre, 'url' => ['view', 'id' => $model->IDproductoIngre]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producto-ingrediente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
