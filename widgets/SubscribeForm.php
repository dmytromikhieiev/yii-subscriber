<?php
namespace app\widgets;

use yii\base\Widget;

/**
 * Class SubscribeForm
 */
class SubscribeForm extends Widget
{
    public $model;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('subscribe');
    }
}