<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%citizenship}}".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 */
class Citizenship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%citizenship}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 3],
			
            [['name', 'code'], 'unique'],
			['name','match','pattern' =>'/^[a-zA-Z ]+/'],
			
			['code','match','pattern' =>'/^[1-9]\d*$/']
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
