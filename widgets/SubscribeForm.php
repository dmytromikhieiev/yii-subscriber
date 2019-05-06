<?php
namespace app\widgets;

use yii\base\Widget;

/**
 * Class SubscribeForm
 */
class SubscribeForm extends Widget
{
    /**
     * init
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('subscribe');
    }
}