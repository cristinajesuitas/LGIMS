<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%school}}".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%school}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 40],
            [['code'], 'string', 'max' => 1],
            [['name', 'code'], 'unique'],
			['name', 'match', 'pattern' => '/^[A-z]+$/'],
			['code', 'match', 'pattern' => '/^[1|2]+$/']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
