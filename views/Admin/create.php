<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SelectForm */

$this->title = 'Create Select Form';
$this->params['breadcrumbs'][] = ['label' => 'Select Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="select-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
