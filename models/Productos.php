<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property integer $IDproducto
 * @property integer $IDcategoria
 * @property integer $costo_venta
 * @property integer $costo_crear
 * @property string $nombre
 *
 * @property DetalleVenta[] $detalleVentas
 * @property ProductoIngrediente[] $productoIngredientes
 * @property Categorias $iDcategoria
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDproducto', 'IDcategoria', 'costo_venta', 'costo_crear', 'nombre'], 'required'],
            [['IDproducto', 'IDcategoria', 'costo_venta', 'costo_crear'], 'integer'],
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
            'IDproducto' => Yii::t('app', 'Idproducto'),
            'IDcategoria' => Yii::t('app', 'Idcategoria'),
            'costo_venta' => Yii::t('app', 'Costo Venta'),
            'costo_crear' => Yii::t('app', 'Costo Crear'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleVentas()
    {
        return $this->hasMany(DetalleVenta::className(), ['IDproducto' => 'IDproducto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoIngredientes()
    {
        return $this->hasMany(ProductoIngrediente::className(), ['IDproducto' => 'IDproducto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDcategoria()
    {
        return $this->hasOne(Categorias::className(), ['IDcategoria' => 'IDcategoria']);
    }
}
