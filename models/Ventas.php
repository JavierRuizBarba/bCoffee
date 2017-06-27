<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ventas".
 *
 * @property integer $IDventas
 * @property string $fecha
 * @property integer $IDusuarios
 * @property integer $total
 * @property integer $IDpago
 *
 * @property DetalleVenta[] $detalleVentas
 * @property Pagos $iDpago
 * @property Usuarios $iDusuarios
 */
class Ventas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ventas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDventas', 'fecha', 'IDusuarios', 'total', 'IDpago'], 'required'],
            [['IDventas', 'IDusuarios', 'total', 'IDpago'], 'integer'],
            [['fecha'], 'safe'],
            [['IDpago'], 'exist', 'skipOnError' => true, 'targetClass' => Pagos::className(), 'targetAttribute' => ['IDpago' => 'IDpago']],
            [['IDusuarios'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['IDusuarios' => 'IDusuarios']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDventas' => Yii::t('app', 'Idventas'),
            'fecha' => Yii::t('app', 'Fecha'),
            'IDusuarios' => Yii::t('app', 'Idusuarios'),
            'total' => Yii::t('app', 'Total'),
            'IDpago' => Yii::t('app', 'Idpago'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleVentas()
    {
        return $this->hasMany(DetalleVenta::className(), ['IDventa' => 'IDventas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDpago()
    {
        return $this->hasOne(Pagos::className(), ['IDpago' => 'IDpago']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDusuarios()
    {
        return $this->hasOne(Usuarios::className(), ['IDusuarios' => 'IDusuarios']);
    }
}
