<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Citizen;

/**
 * CitizenSearch represents the model behind the search form about `backend\models\Citizen`.
 */
class CitizenSearch extends Citizen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cap_civilstatus_id', 'cap_disability_id', 'cap_citizenship_id', 'cap_ethnicity_id', 'cap_sex_id', 'cap_occupation_id'], 'integer'],
            [['fname', 'mname', 'lname', 'bdate', 'name', 'code'], 'safe'],
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
        $query = Citizen::find();

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
            'bdate' => $this->bdate,
            'cap_civilstatus_id' => $this->cap_civilstatus_id,
            'cap_disability_id' => $this->cap_disability_id,
            'cap_citizenship_id' => $this->cap_citizenship_id,
            'cap_ethnicity_id' => $this->cap_ethnicity_id,
            'cap_sex_id' => $this->cap_sex_id,
            'cap_occupation_id' => $this->cap_occupation_id,
        ]);

        $query->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'lname', $this->lname]);
            //->andFilterWhere(['like', 'name', $this->name])
           // ->andFilterWhere(['like', 'code', $this->code]);

        return $dataProvider;
    }
}
