<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductoIngrediente;

/**
 * ProductoIngredienteSearch represents the model behind the search form about `app\models\ProductoIngrediente`.
 */
class ProductoIngredienteSearch extends ProductoIngrediente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDproductoIngre', 'IDproducto', 'IDingrediente', 'unidades'], 'integer'],
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
        $query = ProductoIngrediente::find();

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
            'IDproductoIngre' => $this->IDproductoIngre,
            'IDproducto' => $this->IDproducto,
            'IDingrediente' => $this->IDingrediente,
            'unidades' => $this->unidades,
        ]);

        return $dataProvider;
    }
}
