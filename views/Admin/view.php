<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use app\components\SResultsWidget;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\SelectForm */

/**$this->title = $model->name .' ' . $model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Select Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;**/
?>
<div class="select-form-view">

    <h1><?php // echo Html::encode($this->title) ?></h1>

    <p><p><?= Html::tag('p', Html::a(Html::encode('Вернуться к списку'), ['index'], ['data-pjax'=>0]), ['class' => 'BackLink']) ?></p>
       <!-- <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>-->
       <!-- <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>
    <div class="details">
    <?php
    $defaultAva = '@web/ava/no_img.jpg';
    $avatar = Html::img($model->avatar ? $model->avatar : $defaultAva, ['alt' => 'Фотография пользователя']);
    $userData = Html::tag('p',(Html::encode($model->name . ' ' . $model->surname)), ['class' => 'cardUsername']) .
        Html::tag('p',(Html::encode($model->position)), ['class' => 'cardSubdivision']) .
        Html::tag('p', Html::a(Html::encode($model->subdivision)), ['class' => 'cardSubdivision']);
    $userCard = $avatar . ' ' . $userData;
    echo $userCard;
    ?>
    </div>
    <div class="sresults_right">
        <?= SResultsWidget::widget() ?>
    </div>

</div>
