<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%workstatus}}".
 *
 * @property string $id
 * @property string $name
 * @property string $code
 */
class Workstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%workstatus}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 70],
            [['code'], 'string', 'max' => 2],
            [['name', 'code'], 'unique'],
			['name', 'match', 'pattern' => '/^[ A-Za-z(),-]*$/'],
			['code', 'match', 'pattern' => '/^[0-9]*$/']
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
