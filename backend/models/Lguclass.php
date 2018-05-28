<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%lguclass}}".
 *
 * @property string $id
 * @property string $cap_lgulevel_id
 * @property string $name
 * @property string $code
 *
 * @property Lgulevel $capLgulevel
 */
class Lguclass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lguclass}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_lgulevel_id', 'name', 'code'], 'required'],
            [['cap_lgulevel_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 4],
            [['name'], 'unique'],
			['name', 'match', 'pattern' => '/^[ A-Za-z()]*$/'],
			['code', 'match', 'pattern' => '/^[0-9 ]*$/'],	
            [['cap_lgulevel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgulevel::className(), 'targetAttribute' => ['cap_lgulevel_id' => 'ID']],
			
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'cap_lgulevel_id' => 'LGU level',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapLgulevel()
    {
        return $this->hasOne(Lgulevel::className(), ['ID' => 'cap_lgulevel_id'])->inverseOf('lgudistricts');
    }
	
	
}
