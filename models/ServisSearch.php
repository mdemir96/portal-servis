<?php

namespace kouosl\servis\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\servis\models\Servis;

/**
 * ServisSearch represents the model behind the search form of `vendor\kouosl\servis\models\Servis`.
 */
class ServisSearch extends Servis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['servis_id'], 'integer'],
            [['iletisim'], 'safe'],
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
        $query = Servis::find();

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
            'servis_id' => $this->servis_id,
        ]);

        $query->andFilterWhere(['like', 'iletisim', $this->iletisim]);

        return $dataProvider;
    }
}
