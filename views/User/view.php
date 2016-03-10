<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model app\models\SelectForm */

$this->title = $model->name .' ' . $model->surname;
$this->params['breadcrumbs'][] = ['label' => 'Select Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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

    <?php
    echo ListView::widget([
        'options' => ['data-pjax' => 1],
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget){
            $defaultAva = '@web/ava/no_img.jpg';
            $avatar = Html::img($model->avatar ? $model->avatar : $defaultAva, ['alt' => 'Фотография пользователя']);
            /**$avatar = ArrayHelper::getValue($model, function ($model, $defaultAva) {
            return Html::img($model->avatar, ['alt' => 'Фотография пользователя']);
            });**/
            $userCard = ArrayHelper::getValue($model, function ($model, $defaultValue) {
                return Html::encode($model->name . ' ' . $model->surname);
            });
            return  $avatar . ' ' . Html::tag('p', Html::a(Html::encode($userCard), ['view', 'id' => $model->id], ['data-pjax'=>0]), ['class' => 'cardUsername']) . Html::tag('p', Html::a(Html::encode($model->position), ['view', 'position' => '&UserSearch%5Bsubdivision%5D=$model->position']), ['class' => 'cardSubdivision']) . Html::tag('p', Html::a(Html::encode($model->subdivision), ['view', 'subdivision' => '&UserSearch%5Bsubdivision%5D=$model->subdivision']), ['class' => 'cardSubdivision']);

        }
    ]);
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'avatar:image',
            'name:html',
            'surname',
            'middlename',
            'sex',
            'birth_date',
            'city',
            'position',
            'subdivision',
        ],
    ]) ?>

</div>
