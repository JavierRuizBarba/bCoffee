<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle_venta".
 *
 * @property integer $IDdetalle
 * @property integer $IDventa
 * @property integer $IDproducto
 * @property integer $cantidad
 * @property integer $total
 *
 * @property Productos $iDproducto
 * @property Ventas $iDventa
 */
class DetalleVenta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_venta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDdetalle', 'IDventa', 'IDproducto', 'cantidad', 'total'], 'required'],
            [['IDdetalle', 'IDventa', 'IDproducto', 'cantidad', 'total'], 'integer'],
            [['IDproducto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['IDproducto' => 'IDproducto']],
            [['IDventa'], 'exist', 'skipOnError' => true, 'targetClass' => Ventas::className(), 'targetAttribute' => ['IDventa' => 'IDventas']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDdetalle' => Yii::t('app', 'Iddetalle'),
            'IDventa' => Yii::t('app', 'Idventa'),
            'IDproducto' => Yii::t('app', 'Idproducto'),
            'cantidad' => Yii::t('app', 'Cantidad'),
            'total' => Yii::t('app', 'Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDproducto()
    {
        return $this->hasOne(Productos::className(), ['IDproducto' => 'IDproducto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDventa()
    {
        return $this->hasOne(Ventas::className(), ['IDventas' => 'IDventa']);
    }
}
