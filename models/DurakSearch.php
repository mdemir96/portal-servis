<?php

namespace kouosl\servis\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\servis\models\Durak;

/**
 * DurakSearch represents the model behind the search form of `vendor\kouosl\servis\models\Durak`.
 */
class DurakSearch extends Durak
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['durak_id'], 'integer'],
            [['durak_adi'], 'safe'],
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
        $query = Durak::find();

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
            'durak_id' => $this->durak_id,
        ]);

        $query->andFilterWhere(['like', 'durak_adi', $this->durak_adi]);

        return $dataProvider;
    }
}
