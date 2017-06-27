<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle_compra".
 *
 * @property integer $IDdetalleCompra
 * @property integer $IDcompra
 * @property integer $IDingrediente
 * @property integer $cantidad
 * @property integer $total
 *
 * @property Compras $iDcompra
 * @property Ingredientes $iDingrediente
 */
class DetalleCompra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_compra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDdetalleCompra', 'IDcompra', 'IDingrediente', 'cantidad', 'total'], 'required'],
            [['IDdetalleCompra', 'IDcompra', 'IDingrediente', 'cantidad', 'total'], 'integer'],
            [['IDcompra'], 'exist', 'skipOnError' => true, 'targetClass' => Compras::className(), 'targetAttribute' => ['IDcompra' => 'IDcompras']],
            [['IDingrediente'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredientes::className(), 'targetAttribute' => ['IDingrediente' => 'IDingredientes']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDdetalleCompra' => Yii::t('app', 'Iddetalle Compra'),
            'IDcompra' => Yii::t('app', 'Idcompra'),
            'IDingrediente' => Yii::t('app', 'Idingrediente'),
            'cantidad' => Yii::t('app', 'Cantidad'),
            'total' => Yii::t('app', 'Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDcompra()
    {
        return $this->hasOne(Compras::className(), ['IDcompras' => 'IDcompra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDingrediente()
    {
        return $this->hasOne(Ingredientes::className(), ['IDingredientes' => 'IDingrediente']);
    }
}
