<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/**$this->title = 'Select Forms';
$this->params['breadcrumbs'][] = $this->title;**/
?>
<div class="select-form-index">

    <h1><?php // echo Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <div style="display: inline-block;vertical-align: top;">
           <?= ListView::widget([
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
                return  $avatar . ' ' . Html::tag('p', Html::a(Html::encode($userCard), ['view', 'id' => $model->id]), ['class' => 'cardUsername']) . Html::tag('p', Html::a(Html::encode($model->position), ['view', 'position' => '&UserSearch%5Bsubdivision%5D=$model->position']), ['class' => 'cardSubdivision']) . Html::tag('p', Html::a(Html::encode($model->subdivision), ['view', 'subdivision' => '&UserSearch%5Bsubdivision%5D=$model->subdivision']), ['class' => 'cardSubdivision']);

            }
        ]);   ?>
    </div>
    </div>
