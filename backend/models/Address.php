<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%address}}".
 *
 * @property string $cap_citizen_id
 * @property string $HouseNo
 * @property string $LotNo
 * @property string $BlockNo
 * @property string $UnitNo
 * @property string $BldgName
 * @property string $Street
 * @property string $Purok
 * @property string $Subdivision
 * @property string $cap_barangay_id
 * @property string $cap_municipal_id
 * @property string $cap_province_id
 * @property string $cap_region_id
 *
 * @property Region $capRegion
 * @property Province $capProvince
 * @property Municipal $capMunicipal
 * @property Barangay $capBarangay
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%address}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_citizen_id', 'Street', 'cap_barangay_id', 'cap_municipal_id', 'cap_province_id', 'cap_region_id'], 'required'],
            [['cap_citizen_id', 'cap_barangay_id', 'cap_municipal_id', 'cap_province_id', 'cap_region_id'], 'integer'],
            [['HouseNo', 'LotNo', 'BlockNo', 'UnitNo'], 'string', 'max' => 5],
            [['BldgName', 'Street', 'Purok', 'Subdivision'], 'string', 'max' => 40],
            [['cap_citizen_id'], 'unique'],
            [['cap_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['cap_region_id' => 'id']],
            [['cap_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['cap_province_id' => 'id']],
            [['cap_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Municipal::className(), 'targetAttribute' => ['cap_municipal_id' => 'id']],
            [['cap_barangay_id'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['cap_barangay_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cap_citizen_id' => 'Cap Citizen ID',
            'HouseNo' => 'House No.',
            'LotNo' => 'Lot No.',
            'BlockNo' => 'Block No.',
            'UnitNo' => 'Unit No.',
            'BldgName' => 'Bldg Name',
            'Street' => 'Street',
            'Purok' => 'Purok',
            'Subdivision' => 'Subdivision',
            'cap_barangay_id' => 'Cap Barangay ID',
            'cap_municipal_id' => 'Cap Municipal ID',
            'cap_province_id' => 'Cap Province ID',
            'cap_region_id' => 'Cap Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'cap_region_id']);
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
    public function getCapMunicipal()
    {
        return $this->hasOne(Municipal::className(), ['id' => 'cap_municipal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapBarangay()
    {
        return $this->hasOne(Barangay::className(), ['id' => 'cap_barangay_id']);
    }
}
