<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%occupation}}".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 */
class occupation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%occupation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 120],
            [['code'], 'string', 'max'=> 2,],
            [['name', 'code'], 'unique'],
			['name', 'match', 'pattern' => '/^[ A-Za-z(),-_:]*$/'],
			['code', 'match', 'pattern' => '/^[0-9 ]*$/']
			
			
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'ID' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
