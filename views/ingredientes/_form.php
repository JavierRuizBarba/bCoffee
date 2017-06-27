<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ingredientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ingredientes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDingredientes')->textInput() ?>

    <?= $form->field($model, 'costo_unidad')->textInput() ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IDcategoria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
