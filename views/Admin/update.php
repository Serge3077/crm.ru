<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SelectForm */

/*$this->title = 'Update Select Form: ' . ' ' . $model->name;*/
$this->params['breadcrumbs'][] = ['label' => 'Select Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name . ' ' . $model->surname, 'url' => ['update', 'id' => $model->id]];
?>
<div class="select-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
