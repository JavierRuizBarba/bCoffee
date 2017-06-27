<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras".
 *
 * @property integer $IDcompras
 * @property string $fecha
 * @property integer $IDusuarios
 * @property integer $total
 *
 * @property DetalleCompra[] $detalleCompras
 */
class Compras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDcompras', 'fecha', 'IDusuarios', 'total'], 'required'],
            [['IDcompras', 'IDusuarios', 'total'], 'integer'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDcompras' => Yii::t('app', 'Idcompras'),
            'fecha' => Yii::t('app', 'Fecha'),
            'IDusuarios' => Yii::t('app', 'Idusuarios'),
            'total' => Yii::t('app', 'Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCompras()
    {
        return $this->hasMany(DetalleCompra::className(), ['IDcompra' => 'IDcompras']);
    }
}
