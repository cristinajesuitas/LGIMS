<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%civilstatus}}".
 *
 * @property string $id
 * @property string $name
 * @property string $code
 */
class Civilstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%civilstatus}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 20],
            [['code'], 'string', 'max' => 1],
            [['name','code'], 'unique'],
			['name', 'match', 'pattern' => '/^[ A-Za-z()-]+$/'],
			['code', 'match', 'pattern' => '/^[1-6]+$/']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
