<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="select-form-search">
    <?php $form = ActiveForm::begin([
        'action' => ['admin/index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'surname') ?>

    <?php // echo$form->field($model, 'middlename') ?>

    <?php // echo$form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?= $form->field($model, 'city')->dropdownList(User::find()->select(['city', 'id'])->indexBy('city')->column(), ['prompt'=>'Город']); ?>

    <?= $form->field($model, 'position')->dropdownList(User::find()->select(['position', 'id'])->indexBy('position')->column(), ['prompt'=>'Должность']);  ?>

    <?= $form->field($model, 'subdivision')->dropdownList(User::find()->select(['subdivision', 'id'])->indexBy('subdivision')->column(), ['prompt'=>'Подразделение']); ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php //echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
