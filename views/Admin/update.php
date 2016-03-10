<?php

use yii\helpers\Html;
use app\components\SResultsWidget;

/* @var $this yii\web\View */
/* @var $model app\models\SelectForm */

/*$this->title = 'Update Select Form: ' . ' ' . $model->name;*/
/**$this->params['breadcrumbs'][] = ['label' => 'Select Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name . ' ' . $model->surname, 'url' => ['update', 'id' => $model->id]];**/
?>
<div class="select-form-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php \yii\widgets\Pjax::begin(); ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <?php \yii\widgets\Pjax::end(); ?>
</div>
<div class="sresults_right">
    <?= SResultsWidget::widget() ?>
</div>
