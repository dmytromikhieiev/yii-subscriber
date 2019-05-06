<?php

namespace app\controllers;

use app\models\Subscriber;
use Yii;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Class DefaultController
 */
class DefaultController extends Controller
{
    public $enableCsrfValidation = true;
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

    /**
     * @return string
     *
     * @throws BadRequestHttpException
     */
    public function actionSubscribe()
    {
        $subscriber = new Subscriber();
        $subscriber->email = Yii::$app->request->post('email');
        if (!$subscriber->validate()) {
            $errors = $subscriber->getErrors();
            throw new BadRequestHttpException($errors['email'][0]);
        }
        $subscriber->save();

        return $this->asJson(['message' => 'Subscribed!']);
    }
}
