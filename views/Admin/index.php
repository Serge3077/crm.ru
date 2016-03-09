<?php

use yii\widgets\Pjax;
use app\components\SResultsWidget;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/**$this->title = 'Select Forms';
$this->params['breadcrumbs'][] = $this->title;**/
?>

<? Pjax::begin(['timeout' => 100000, 'clientOptions' => ['container' => 'pjax-container']]) ?>
<div class="select-form-index">

    <div style="display: inline-block;vertical-align: top;">
        <?= SResultsWidget::widget() ?>
    </div>
    </div>
<? Pjax::end() ?>
