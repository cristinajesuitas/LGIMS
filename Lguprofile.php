<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%lguprofile}}".
 *
 * @property string $id
 * @property string $name
 * @property string $website
 * @property string $cap_lguclass_id
 * @property string $cap_lgulevel_id
 * @property string $totalbrgy
 * @property string $landarea
 * @property string $zipcode
 *
 * @property Lguclass $capLguclass
 * @property Lgulevel $capLgulevel
 */
class Lguprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lguprofile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_lguname_id', 'cap_lgucategory_id', 'cap_lgudistrict_id', 'cap_religion_id', 'cap_ethnicity_id', 'cap_citizenship_id', 'cap_lgulevel_id','name', 'webesite', 'totalbrgy', 'landarea', 'zipcode'], 'required'],
            [['cap_lguname_id', 'cap_lgucategory_id', 'cap_lgudistrict_id', 'cap_religion_id', 'cap_ethnicity_id', 'cap_citizenship_id', 'cap_lgulevel_id', 'totalbrgy'], 'integer'],
            [['name', 'website', 'landarea'], 'string', 'max' => 50],
            [['zipcode'], 'string', 'max' => 4],
            [['website'], 'unique'],
			[['cap_lguname_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lguname::className(), 'targetAttribute' => ['cap_lguname_id' => 'id']],
			[['cap_lgucategory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgucategory::className(), 'targetAttribute' => ['cap_lgucategory_id' => 'id']],
			[['cap_lgudistrict_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgudistrict::className(), 'targetAttribute' => ['cap_lgudistrict_id' => 'id']],
			[['cap_religion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Religion::className(), 'targetAttribute' => ['cap_religion_id' => 'ID']],
			[['cap_ethnicity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ethnicity::className(), 'targetAttribute' => ['cap_ethnicity_id' => 'ID']],
			[['cap_citizenship_id'], 'exist', 'skipOnError' => true, 'targetClass' => Citizenship::className(), 'targetAttribute' => ['cap_citizenship_id' => 'ID']],
            [['cap_lgulevel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lgulevel::className(), 'targetAttribute' => ['cap_lgulevel_id' => 'ID']],
			['name', 'match', 'pattern' => '/^[ A-Za-z ]*$/'],
			['code', 'match', 'pattern' => '/^\d/']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'cap_lguname_id' => '',
			'cap_lgucategory_id' => '',
			'cap_lgudistrict_id' => '',
			'cap_lgulevel_id' => '',
			'cap_religion_id' => '',
			'cap_ethnicity_id' => '',
			'cap_citizenship_id' => '',
			'name' => 'Name',
            'website' => 'Website',
            'totalbrgy' => 'Total Barangay',
            'landarea' => 'Land Area',
            'zipcode' => 'Zip Code',
        ];
    }

    /**
  
  * @return \yii\db\ActiveQuery
     */
	 public function getCapLguname()
    {
        return $this->hasOne(Lguname::className(), ['id' => 'cap_lguname_id'])->inverseOf('lguprofiles');
    }
	 public function getCapLgucategory()
    {
        return $this->hasOne(Lgucategory::className(), ['id' => 'cap_lgucategory_id'])->inverseOf('lguprofiles');
    }
	public function getCapLgudistrict()
    {
        return $this->hasOne(Lgudistrict::className(), ['id' => 'cap_lgudistrict_id'])->inverseOf('lguprofiles');
    }
	 public function getCapReligion()
    {
        return $this->hasOne(Religion::className(), ['id' => 'cap_religion_id'])->inverseOf('lguprofiles');
    }
	public function getCapEthnicity()
    {
        return $this->hasOne(Ethnicity::className(), ['id' => 'cap_ethnicity_id'])->inverseOf('lguprofiles');
    }
	 public function getCapCitizenship()
    {
        return $this->hasOne(Citizenship::className(), ['id' => 'cap_citizenship_id'])->inverseOf('lguprofiles');
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapLgulevel()
    {
        return $this->hasOne(Lgulevel::className(), ['id' => 'cap_lgulevel_id'])->inverseOf('lguprofiles');
    }
}
