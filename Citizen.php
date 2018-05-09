<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%citizen}}".
 *
 * @property string $id
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $bdate
 * @property string $cap_civilstatus_id
 * @property string $cap_disability_id
 * @property string $cap_citizenship_id
 * @property string $cap_ethnicity_id
 * @property string $cap_sex_id
 * @property string $cap_occupation_id
 * @property string $placeofbirth
 * @property string $Address
 * @property int $number
 * @property string $rtohouholhead
 * @property string $name_subd_zone_sitio_purok
 *
 * @property Citizenship $capCitizenship
 * @property Civilstatus $capCivilstatus
 * @property Disability $capDisability
 * @property Ethnicity $capEthnicity
 * @property Occupation $capOccupation
 * @property Sex $capSex
 */
class Citizen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%citizen}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'mname', 'lname', 'bdate', 'cap_civilstatus_id', 'cap_disability_id', 'cap_citizenship_id', 'cap_ethnicity_id', 'cap_sex_id', 'cap_occupation_id', 'placeofbirth', 'Address', 'number', 'rtohouholhead', 'name_subd_zone_sitio_purok'], 'required'],
            [['bdate'], 'safe'],
            [['cap_civilstatus_id', 'cap_disability_id', 'cap_citizenship_id', 'cap_ethnicity_id', 'cap_sex_id', 'cap_occupation_id', 'number'], 'integer'],
            [['fname', 'mname', 'lname', 'Address', 'rtohouholhead'], 'string', 'max' => 20],
            [['placeofbirth'], 'string', 'max' => 75],
            [['name_subd_zone_sitio_purok'], 'string', 'max' => 50],
            [['cap_citizenship_id'], 'exist', 'skipOnError' => true, 'targetClass' => Citizenship::className(), 'targetAttribute' => ['cap_citizenship_id' => 'ID']],
            [['cap_civilstatus_id'], 'exist', 'skipOnError' => true, 'targetClass' => Civilstatus::className(), 'targetAttribute' => ['cap_civilstatus_id' => 'id']],
            [['cap_disability_id'], 'exist', 'skipOnError' => true, 'targetClass' => Disability::className(), 'targetAttribute' => ['cap_disability_id' => 'id']],
            [['cap_ethnicity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ethnicity::className(), 'targetAttribute' => ['cap_ethnicity_id' => 'ID']],
            [['cap_occupation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Occupation::className(), 'targetAttribute' => ['cap_occupation_id' => 'ID']],
            [['cap_sex_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sex::className(), 'targetAttribute' => ['cap_sex_id' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'Firstname',
            'mname' => 'Middlename',
            'lname' => 'Lastname',
            'bdate' => 'Birth date',
            'cap_civilstatus_id' => 'Civil Status',
            'cap_disability_id' => 'Disability',
            'cap_citizenship_id' => 'Citizenship',
            'cap_ethnicity_id' => 'Ethnicity',
            'cap_sex_id' => 'Sex',
            'cap_occupation_id' => 'Occupation',
            'placeofbirth' => 'Place of birth',
            'Address' => 'address',
            'number' => 'Number',
            'rtohouholhead' => 'Relationship to household head',
            'name_subd_zone_sitio_purok' => 'Name of SUBD/ZONE/SITIO/PUROK',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapCitizenship()
    {
        return $this->hasOne(Citizenship::className(), ['ID' => 'cap_citizenship_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapCivilstatus()
    {
        return $this->hasOne(Civilstatus::className(), ['id' => 'cap_civilstatus_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapDisability()
    {
        return $this->hasOne(Disability::className(), ['id' => 'cap_disability_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapEthnicity()
    {
        return $this->hasOne(Ethnicity::className(), ['ID' => 'cap_ethnicity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapOccupation()
    {
        return $this->hasOne(Occupation::className(), ['ID' => 'cap_occupation_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCapSex()
    {
        return $this->hasOne(Sex::className(), ['ID' => 'cap_sex_id']);
    }
}
