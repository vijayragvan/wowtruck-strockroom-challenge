<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\marklist;

/**
 * marklistSearch represents the model behind the search form about `backend\models\marklist`.
 */
class marklistSearch extends marklist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'English', 'Maths', 'Science'], 'integer'],
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
        $query = marklist::find();

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
            'English' => $this->English,
            'Maths' => $this->Maths,
            'Science' => $this->Science,
        ]);

        return $dataProvider;
    }
}
