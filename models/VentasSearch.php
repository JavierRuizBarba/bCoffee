<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ventas;

/**
 * VentasSearch represents the model behind the search form about `app\models\Ventas`.
 */
class VentasSearch extends Ventas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDventas', 'IDusuarios', 'total', 'IDpago'], 'integer'],
            [['fecha'], 'safe'],
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
        $query = Ventas::find();

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
            'IDventas' => $this->IDventas,
            'fecha' => $this->fecha,
            'IDusuarios' => $this->IDusuarios,
            'total' => $this->total,
            'IDpago' => $this->IDpago,
        ]);

        return $dataProvider;
    }
}
