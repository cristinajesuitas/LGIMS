<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%email}}".
 *
 * @property string $cap_user_id
 * @property string $email
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%email}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_user_id', 'email'], 'required'],
            [['cap_user_id'], 'integer'],
            [['email'], 'string', 'max' => 190],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cap_user_id' => 'Cap User ID',
            'email' => 'Email',
        ];
    }
}
