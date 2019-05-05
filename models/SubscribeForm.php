<?php
namespace app\models;

use yii\base\Model;

/**
 * Class SubscribeForm
 */
class SubscribeForm extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            ['email', 'email'],
        ];
    }
}