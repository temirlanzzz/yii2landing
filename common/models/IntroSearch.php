<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Intro;

/**
 * IntroSearch represents the model behind the search form of `common\models\Intro`.
 */
class IntroSearch extends Intro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titleru', 'titlekz', 'titleen', 'descriptionru', 'descriptionkz', 'descriptionen', 'img'], 'safe'],
            [['id'], 'integer'],
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
        $query = Intro::find();

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

        $query->andFilterWhere(['like', 'titleru', $this->titleru])
            ->andFilterWhere(['like', 'titlekz', $this->titlekz])
            ->andFilterWhere(['like', 'titleen', $this->titleen])
            ->andFilterWhere(['like', 'descriptionru', $this->descriptionru])
            ->andFilterWhere(['like', 'descriptionkz', $this->descriptionkz])
            ->andFilterWhere(['like', 'descriptionen', $this->descriptionen])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}
