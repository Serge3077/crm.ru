<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 04.03.2016
 * Time: 16:57
 */

use yii\base\Widget;
use app\models\UserSearch;

class SearchWidget extends Widget
{

    public function run(){
        $form = new UserSearch();
        $form->load(\Yii::$app->request->get());
        return $this->render('_search', ['model' => $form]);
    }

}