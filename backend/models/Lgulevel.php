<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%lgulevel}}".
 *
 * @property string $ID
 * @property string $name
 * @property string $code
 *
 * @property Landclass[] $landclasses
 * @property Lgucategory[] $lgucategories
 * @property Lguclass[] $lguclasses
 * @property Lgudistrict[] $lgudistricts
 * @property Lguprofile[] $lguprofiles
 */
class Lgulevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lgulevel}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['code'], 'string', 'max' => 4],
            [['name'], 'unique'],
			['name', 'match', 'pattern' => '/^[a-zA-Z]*$/'],
			['code', 'match', 'pattern' => '/^[0-9 ]*$/']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLandclasses()
    {
        return $this->hasMany(Landclass::className(), ['cap_lgulevel_ID' => 'ID'])->inverseOf('capLgulevel');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLgucategories()
    {
        return $this->hasMany(Lgucategory::className(), ['cap_lgulevel_id' => 'ID'])->inverseOf('capLgulevel');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLguclasses()
    {
        return $this->hasMany(Lguclass::className(), ['cap_lgulevel_id' => 'ID'])->inverseOf('capLgulevel');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLgudistricts()
    {
        return $this->hasMany(Lgudistrict::className(), ['cap_lgulevel_id' => 'ID'])->inverseOf('capLgulevel');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLguprofiles()
    {
        return $this->hasMany(Lguprofile::className(), ['cap_lgulevel_id' => 'ID'])->inverseOf('capLgulevel');
    }
	
}
