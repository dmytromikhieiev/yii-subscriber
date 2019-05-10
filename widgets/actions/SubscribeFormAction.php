<?php

namespace app\widgets\actions;

use Yii;
use yii\base\Action;
use yii\db\ActiveRecord;

/**
 * Class SubscribeFormAction
 */
class SubscribeFormAction extends Action
{
    /**
     * @var ActiveRecord
     */
    public $model;

    /**
     * @return string
     */
    public function run()
    {
        $this->model->email = Yii::$app->request->post('email');
        if (!$this->model->validate()) {
            $errors = $this->model->getErrors();
            $message = $errors['email'][0];

            return $this->controller->render('@app/widgets/views/subscribe', ['message' => $message]);
        }
        $this->model->save();

        return $this->controller->render('@app/widgets/views/subscribe', ['message' => 'Subscribed!']);
    }
}
