<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ingredientes */

$this->title = 'Create Ingredientes';
$this->params['breadcrumbs'][] = ['label' => 'Ingredientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingredientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
