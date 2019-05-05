<?php

namespace app\controllers;

use app\models\SubscribeForm;

/**
 * Class DefaultController
 */
class DefaultController extends \yii\web\Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $model = new SubscribeForm();

        return $this->render('index', ['model' => $model]);
    }
}
