<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%barangay}}".
 *
 * @property string $id
 * @property string $cap_region_id
 * @property string $cap_province_id
 * @property string $cap_municipal_id
 * @property string $name
 * @property string $code
 *
 * @property Municipal $capMunicipal
 * @property Province $capProvince
 * @property Region $capRegion
 */
class Barangay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%barangay}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_region_id', 'cap_province_id', 'cap_municipal_id', 'name', 'code'], 'required'],
            [['cap_region_id', 'cap_province_id', 'cap_municipal_id'], 'integer'],
            [['name'], 'string', 'max' => 40],
            [['code'], 'string', 'max' => 9],
		    [['name', 'code'], 'unique'],
            [['cap_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Municipal::className(), 'targetAttribute' => ['cap_municipal_id' => 'id']],
            [['cap_province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['cap_province_id' => 'id']],
            [['cap_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['cap_region_id' => 'id']],
			
			['name', 'match', 'pattern' => '/^[a-zA-Z ]*$/'],
			['code', 'match', 'pattern' => '/^\d/']
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
            'cap_municipal_id' => 'Municipal',
            'name' => 'Name',
            'code' => 'Code',
        ];
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
