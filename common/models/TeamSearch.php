<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Team;

/**
 * TeamSearch represents the model behind the search form of `common\models\Team`.
 */
class TeamSearch extends Team
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['text1ru', 'text1en', 'text1kz', 'text2ru', 'text2en', 'text2kz'], 'safe'],
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
        $query = Team::find();

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

        $query->andFilterWhere(['like', 'text1ru', $this->text1ru])
            ->andFilterWhere(['like', 'text1en', $this->text1en])
            ->andFilterWhere(['like', 'text1kz', $this->text1kz])
            ->andFilterWhere(['like', 'text2ru', $this->text2ru])
            ->andFilterWhere(['like', 'text2en', $this->text2en])
            ->andFilterWhere(['like', 'text2kz', $this->text2kz]);

        return $dataProvider;
    }
}
