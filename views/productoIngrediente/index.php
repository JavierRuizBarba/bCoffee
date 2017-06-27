<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductoIngredienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producto Ingredientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-ingrediente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Producto Ingrediente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDproductoIngre',
            'IDproducto',
            'IDingrediente',
            'unidades',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
