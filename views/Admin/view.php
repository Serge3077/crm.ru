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

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       <!-- <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p>

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
