<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingredientes".
 *
 * @property integer $IDingredientes
 * @property integer $costo_unidad
 * @property string $nombre
 * @property integer $IDcategoria
 *
 * @property DetalleCompra[] $detalleCompras
 * @property Categorias $iDcategoria
 * @property Inventario[] $inventarios
 * @property ProductoIngrediente[] $productoIngredientes
 */
class Ingredientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ingredientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDingredientes', 'costo_unidad', 'nombre', 'IDcategoria'], 'required'],
            [['IDingredientes', 'costo_unidad', 'IDcategoria'], 'integer'],
            [['nombre'], 'string'],
            [['IDcategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['IDcategoria' => 'IDcategoria']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDingredientes' => Yii::t('app', 'Idingredientes'),
            'costo_unidad' => Yii::t('app', 'Costo Unidad'),
            'nombre' => Yii::t('app', 'Nombre'),
            'IDcategoria' => Yii::t('app', 'Idcategoria'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['IDingrediente' => 'IDingredientes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDcategoria()
    {
        return $this->hasOne(Categorias::className(), ['IDcategoria' => 'IDcategoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventarios()
    {
        return $this->hasMany(Inventario::className(), ['IDingrediente' => 'IDingredientes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoIngredientes()
    {
        return $this->hasMany(ProductoIngrediente::className(), ['IDingrediente' => 'IDingredientes']);
    }
}
