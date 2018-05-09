<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%province}}".
 *
 * @property string $id
 * @property string $cap_region_id
 * @property string $name
 * @property string $code
 *
 * @property Barangay[] $barangays
 * @property Municipal[] $municipals
 * @property Region $capRegion
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%province}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_region_id', 'name', 'code'], 'required'],
            [['cap_region_id'], 'integer'],
            [['name'], 'string', 'max' => 40],
            [['code'], 'string', 'max' => 9],
            [['name', 'code',], 'unique'],
            [['cap_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['cap_region_id' => 'id']],
			['name', 'match', 'pattern' => '/^[ A-Za-z()-]*$/'],
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
            'cap_region_id' => 'Region ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['cap_province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunicipals()
    {
        return $this->hasMany(Municipal::className(), ['cap_province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'cap_region_id']);
    }
}
