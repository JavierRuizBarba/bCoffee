<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagos".
 *
 * @property integer $IDpago
 * @property string $fecha
 * @property integer $total
 * @property integer $tax
 * @property integer $IDtipo
 *
 * @property TiposPagos $iDtipo
 * @property Ventas[] $ventas
 */
class Pagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDpago', 'fecha', 'total', 'tax', 'IDtipo'], 'required'],
            [['IDpago', 'total', 'tax', 'IDtipo'], 'integer'],
            [['fecha'], 'safe'],
            [['IDtipo'], 'exist', 'skipOnError' => true, 'targetClass' => TiposPagos::className(), 'targetAttribute' => ['IDtipo' => 'IDtipo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDpago' => Yii::t('app', 'Idpago'),
            'fecha' => Yii::t('app', 'Fecha'),
            'total' => Yii::t('app', 'Total'),
            'tax' => Yii::t('app', 'Tax'),
            'IDtipo' => Yii::t('app', 'Idtipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDtipo()
    {
        return $this->hasOne(TiposPagos::className(), ['IDtipo' => 'IDtipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Ventas::className(), ['IDpago' => 'IDpago']);
    }
}
