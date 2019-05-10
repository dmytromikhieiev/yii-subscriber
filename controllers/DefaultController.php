<?php

namespace app\controllers;

use app\models\Subscriber;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Class DefaultController
 */
class DefaultController extends Controller
{
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'subscribe' => [
                'class' => 'app\widgets\actions\SubscribeFormAction',
                'model' => new Subscriber()
            ],
        ];

    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'subscribe' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
