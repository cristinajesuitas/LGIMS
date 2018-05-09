<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%password_hash}}".
 *
 * @property string $cap_user_id
 * @property string $password_hash
 */
class PasswordHash extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%password_hash}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_user_id', 'password_hash'], 'required'],
            [['cap_user_id'], 'integer'],
            [['password_hash'], 'string', 'max' => 60],
            [['password_hash'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cap_user_id' => 'Cap User ID',
            'password_hash' => 'Password Hash',
        ];
    }
}
