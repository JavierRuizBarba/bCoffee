<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $IDusuarios
 * @property string $nombre
 * @property string $correo
 * @property integer $telefono
 * @property boolean $tipo
 *
 * @property Ventas[] $ventas
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDusuarios', 'nombre', 'tipo'], 'required'],
            [['IDusuarios', 'telefono'], 'integer'],
            [['nombre', 'correo'], 'string'],
            [['tipo'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDusuarios' => Yii::t('app', 'Idusuarios'),
            'nombre' => Yii::t('app', 'Nombre'),
            'correo' => Yii::t('app', 'Correo'),
            'telefono' => Yii::t('app', 'Telefono'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVentas()
    {
        return $this->hasMany(Ventas::className(), ['IDusuarios' => 'IDusuarios']);
    }
}
