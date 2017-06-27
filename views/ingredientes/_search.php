<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IngredientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ingredientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDingredientes') ?>

    <?= $form->field($model, 'costo_unidad') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'IDcategoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
