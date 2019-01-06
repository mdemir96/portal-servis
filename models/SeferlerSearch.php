<?php

namespace kouosl\servis\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\servis\models\Seferler;

/**
 * SeferlerSearch represents the model behind the search form of `vendor\kouosl\servis\models\Seferler`.
 */
class SeferlerSearch extends Seferler
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sefer_id'], 'integer'],
            [['sefer_saati'], 'safe'],
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
        $query = Seferler::find();

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
            'sefer_id' => $this->sefer_id,
        ]);

        $query->andFilterWhere(['like', 'sefer_saati', $this->sefer_saati]);

        return $dataProvider;
    }
}
