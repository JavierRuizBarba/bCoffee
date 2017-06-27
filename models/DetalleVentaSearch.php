<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetalleVenta;

/**
 * DetalleVentaSearch represents the model behind the search form about `app\models\DetalleVenta`.
 */
class DetalleVentaSearch extends DetalleVenta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDdetalle', 'IDventa', 'IDproducto', 'cantidad', 'total'], 'integer'],
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
        $query = DetalleVenta::find();

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
            'IDdetalle' => $this->IDdetalle,
            'IDventa' => $this->IDventa,
            'IDproducto' => $this->IDproducto,
            'cantidad' => $this->cantidad,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
