<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%disability}}".
 *
 * @property string $id
 * @property string $name
 * @property string $code
 */
class Disability extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%disability}}';
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
            [['name', 'code'], 'unique'],
			
			['name', 'match', 'pattern' => '/^[ A-za-z]+$/'],
			['code', 'match', 'pattern' => '/^[1-9]+$/'],
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
