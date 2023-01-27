<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Expert;

/**
 * ExpertSearch represents the model behind the search form of `common\models\Expert`.
 */
class ExpertSearch extends Expert
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nameru', 'nameen', 'namekz', 'positionru', 'positionen', 'positionkz', 'img'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Expert::find();

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
        ]);

        $query->andFilterWhere(['like', 'nameru', $this->nameru])
            ->andFilterWhere(['like', 'nameen', $this->nameen])
            ->andFilterWhere(['like', 'namekz', $this->namekz])
            ->andFilterWhere(['like', 'positionru', $this->positionru])
            ->andFilterWhere(['like', 'positionen', $this->positionen])
            ->andFilterWhere(['like', 'positionkz', $this->positionkz])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
