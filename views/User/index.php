<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/**$this->title = 'Select Forms';
$this->params['breadcrumbs'][] = $this->title;**/
?>

<? Pjax::begin(['timeout' => 100000, 'clientOptions' => ['container' => 'pjax-container']]) ?>
<div class="select-form-index">

    <div style="display: inline-block;vertical-align: top;">
        <?php
        Pjax::begin(['id' => 'results-right']);
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
        return  $avatar . ' ' . Html::tag('p', Html::a(Html::encode($userCard), ['update', 'id' => $model->id], ['data-pjax'=>0]), ['class' => 'cardUsername']) . Html::tag('p', Html::a(Html::encode($model->position), ['view', 'position' => '&UserSearch%5Bsubdivision%5D=$model->position']), ['class' => 'cardSubdivision']) . Html::tag('p', Html::a(Html::encode($model->subdivision), ['view', 'subdivision' => '&UserSearch%5Bsubdivision%5D=$model->subdivision']), ['class' => 'cardSubdivision']);

        }
        ]);
        Pjax::end();
        ?>
    </div>
    </div>
<? Pjax::end() ?>
