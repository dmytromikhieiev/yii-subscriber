<?php
namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class SubscribeForm
 */
class Subscriber extends ActiveRecord
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            ['email', 'email'],
            ['email', 'unique'],
        ];
    }

    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{newsletter}}';
    }
}
