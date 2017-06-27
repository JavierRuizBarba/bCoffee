<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDproducto')->textInput() ?>

    <?= $form->field($model, 'IDcategoria')->textInput() ?>

    <?= $form->field($model, 'costo_venta')->textInput() ?>

    <?= $form->field($model, 'costo_crear')->textInput() ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
