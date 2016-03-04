<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 04.03.2016
 * Time: 16:57
 */

use yii\base\Widget;
use yii\helpers\Html;


class SearchWidget extends Widget
{

    public function run(){
        $form = new _search();
        return $this->render('_search', ['_search' => $form]);
    }

}