<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%municipal}}".
 *
 * @property string $id
 * @property string $cap_region_id
 * @property string $cap_province_id
 * @property string $name
 * @property string $code
 *
 * @property Barangay[] $barangays
 * @property Province $capProvince
 * @property Region $capRegion
 */
class Municipal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%municipal}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_region_id', 'cap_province_id', 'name', 'code'], 'required'],
            [['cap_region_id', 'cap_province_id'], 'integer'],
            [['name'], 'string', 'max' => 40],
            [['code'], 'string', 'max' => 9],
            [['name', 'code'], 'unique'],
            [['cap_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['cap_province_id' => 'id']],
            [['cap_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['cap_region_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID', 
            'cap_region_id' => 'Region',
            'cap_province_id' => 'Province',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['cap_municipal_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'cap_province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'cap_region_id']);
    }
}
