<?php

/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 09.03.2016
 * Time: 16:18
 */

namespace app\components;

use Yii;
use yii\base\Widget;
use app\models\UserSearch;


class SResultsWidget extends Widget
{

    public function run(){
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('_result', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}