<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 09.03.2016
 * Time: 17:32
 */
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;



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