<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lguprofile;

/**
 * Lguprofilesearch represents the model behind the search form about `backend\models\Lguprofile`.
 */
class Lguprofilesearch extends Lguprofile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cap_lguname_id', 'cap_lgucategory_id', 'cap_lgudistrict_id', 'cap_religion_id', 'cap_ethnicity_id', 'cap_citizenship', 'cap_lgulevel_id', 'cap_lgulevel_id', 'totalbrgy'], 'integer'],
            [['name', 'website', 'landarea', 'zipcode'], 'safe'],
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
        $query = Lguprofile::find();

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
            'id' => $this->id,
            'cap_lguname_id' => $this->cap_lguname_id,
			'cap_lgucategory_id' => $this->cap_lgucategory_id,
			'cap_lgudistrict_id' => $this->cap_lgudistrict_id,
			'cap_religion_id' => $this->cap_religion_id,
			'cap_ethnicity_id' => $this->cap_ethnicity_id,
			'cap_citizenship_id' => $this->cap_citizenship_id,
            'cap_lgulevel_id' => $this->cap_lgulevel_id,
            'totalbrgy' => $this->totalbrgy,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'landarea', $this->landarea])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode]);

        return $dataProvider;
    }
}
