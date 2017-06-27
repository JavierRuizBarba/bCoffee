<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductoIngrediente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-ingrediente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDproductoIngre')->textInput() ?>

    <?= $form->field($model, 'IDproducto')->textInput() ?>

    <?= $form->field($model, 'IDingrediente')->textInput() ?>

    <?= $form->field($model, 'unidades')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
