<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 03.03.2016
 * Time: 13:39
 */

use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'file')->fileInput() ?>

    <button>Отправить</button>

<?php ActiveForm::end() ?>