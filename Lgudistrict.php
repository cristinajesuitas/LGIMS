<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%lgudistrict}}".
 *
 * @property string $id
 * @property string $cap_lgulevel_id
 * @property string $name
 * @property string $code
 *
 * @property Lgulevel $capLgulevel
 */
class Lgudistrict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lgudistrict}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_lgulevel_id', 'name', 'code'], 'required'],
            [['cap_lgulevel_id'], 'integer'],
            [['name'], 'string', 'max' => 15],
            [['code'], 'string', 'max' => 1],
            [['name','code'], 'unique'],
            [['cap_lgulevel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgulevel::className(), 'targetAttribute' => ['cap_lgulevel_id' => 'ID']],
			['name', 'match', 'pattern' => '/^[A-Za-z ]+$/'],
			['code', 'match', 'pattern' => '/^[1-7]+$/'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cap_lgulevel_id' => 'LGU Level',
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
