<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%education}}".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%education}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
         
		
		   return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['code'], 'string', 'max' => 3],
            [['name', 'code'], 'unique'],
			['name', 'match', 'pattern' => '/^[a-zA-Z0-9 ()]*$/'],
			['code', 'match', 'pattern' => '/^[1-9]\d*$/']
        ];
		
		 
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            /** 'ID' => 'ID', */
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
