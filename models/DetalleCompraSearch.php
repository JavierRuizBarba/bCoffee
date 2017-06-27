<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetalleCompra;

/**
 * DetalleCompraSearch represents the model behind the search form about `app\models\DetalleCompra`.
 */
class DetalleCompraSearch extends DetalleCompra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDdetalleCompra', 'IDcompra', 'IDingrediente', 'cantidad', 'total'], 'integer'],
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
        $query = DetalleCompra::find();

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
            'IDdetalleCompra' => $this->IDdetalleCompra,
            'IDcompra' => $this->IDcompra,
            'IDingrediente' => $this->IDingrediente,
            'cantidad' => $this->cantidad,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
