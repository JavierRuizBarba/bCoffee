<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos_pagos".
 *
 * @property integer $IDtipo
 * @property string $nombre
 *
 * @property Pagos[] $pagos
 */
class TiposPagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipos_pagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDtipo', 'nombre'], 'required'],
            [['IDtipo'], 'integer'],
            [['nombre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDtipo' => Yii::t('app', 'Idtipo'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagos()
    {
        return $this->hasMany(Pagos::className(), ['IDtipo' => 'IDtipo']);
    }
}
