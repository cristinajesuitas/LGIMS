<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%ethnicity}}".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 */
class Ethnicity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ethnicity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 40],
            [['code'], 'string', 'max' => 3],
			
			[['name', 'code'], 'unique'],
			['name', 'match', 'pattern' => '/^[ A-Za-z(),-]*$/'],
			['code', 'match', 'pattern' => '/^[1-9]\d*$/']
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
