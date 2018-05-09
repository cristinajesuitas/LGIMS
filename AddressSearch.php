<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Address;

/**
 * AddressSearch represents the model behind the search form of `backend\models\Address`.
 */
class AddressSearch extends Address
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cap_citizen_id', 'cap_barangay_id', 'cap_municipal_id', 'cap_province_id', 'cap_region_id'], 'integer'],
            [['HouseNo', 'LotNo', 'BlockNo', 'UnitNo', 'BldgName', 'Street', 'Purok', 'Subdivision'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Address::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cap_citizen_id' => $this->cap_citizen_id,
            'cap_barangay_id' => $this->cap_barangay_id,
            'cap_municipal_id' => $this->cap_municipal_id,
            'cap_province_id' => $this->cap_province_id,
            'cap_region_id' => $this->cap_region_id,
        ]);

        $query->andFilterWhere(['like', 'HouseNo', $this->HouseNo])
            ->andFilterWhere(['like', 'LotNo', $this->LotNo])
            ->andFilterWhere(['like', 'BlockNo', $this->BlockNo])
            ->andFilterWhere(['like', 'UnitNo', $this->UnitNo])
            ->andFilterWhere(['like', 'BldgName', $this->BldgName])
            ->andFilterWhere(['like', 'Street', $this->Street])
            ->andFilterWhere(['like', 'Purok', $this->Purok])
            ->andFilterWhere(['like', 'Subdivision', $this->Subdivision]);

        return $dataProvider;
    }
}
