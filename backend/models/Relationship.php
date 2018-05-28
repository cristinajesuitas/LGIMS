<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cap_relationship".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 */
class Relationship extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cap_relationship';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return 
		[
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['code'], 'string', 'max' => 2],
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
            'ID' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
