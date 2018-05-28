<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%sex}}".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 */
class Sex extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sex}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 6],
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
