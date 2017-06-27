<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoIngredienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-ingrediente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDproductoIngre') ?>

    <?= $form->field($model, 'IDproducto') ?>

    <?= $form->field($model, 'IDingrediente') ?>

    <?= $form->field($model, 'unidades') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
