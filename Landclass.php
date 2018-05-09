<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%landclass}}".
 *
 * @property string $id
 * @property string $cap_lgulevel_ID
 * @property string $name
 * @property string $code
 *
 * @property Lgulevel $capLgulevel
 */
class Landclass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%landclass}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_lgulevel_ID', 'name', 'code'], 'required'],
            [['cap_lgulevel_ID'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['code'], 'string', 'max' => 9],
            [['name'], 'unique'],
			['name', 'match', 'pattern' => '/^[a-zA-Z]*$/'],
			['code', 'match', 'pattern' => '/^[0-9 ]*$/'],
            [['cap_lgulevel_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Lgulevel::className(), 'targetAttribute' => ['cap_lgulevel_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'cap_lgulevel_ID' => 'LGU Level',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapLgulevel()
    {
        return $this->hasOne(Lgulevel::className(), ['ID' => 'cap_lgulevel_ID'])->inverseOf('landclasses');
    }
}
