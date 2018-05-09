<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%religion}}".
 *
 * @property string $id
 * @property string $name
 * @property string $code
 */
class Religion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%religion}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['code'], 'string', 'max' => 3],
            [['name', 'code'], 'unique'],
			
			      ['name', 'match', 'pattern' => '/^[ A-Za-z(),]*$/'],
			      ['code', 'match', 'pattern' => '/^[1-9]\d*$/']
			 
			 
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
