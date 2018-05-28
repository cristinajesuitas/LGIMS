<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%lguname}}".
 *
 * @property string $ID
 * @property string $cap_lgulevel_id
 * @property string $Name
 *
 * @property Lgulevel $capLgulevel
 * @property Lguprofile[] $lguprofiles
 */
class Lguname extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lguname}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_lgulevel_id', 'Name'], 'required'],
            [['cap_lgulevel_id'], 'integer'],
            [['Name'], 'string', 'max' => 50],
            [['cap_lgulevel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgulevel::className(), 'targetAttribute' => ['cap_lgulevel_id' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'cap_lgulevel_id' => 'Cap Lgulevel ID',
            'Name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapLgulevel()
    {
        return $this->hasOne(Lgulevel::className(), ['ID' => 'cap_lgulevel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLguprofiles()
    {
        return $this->hasMany(Lguprofile::className(), ['cap_lguname_id' => 'ID']);
    }
}
