<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property integer $IDcategoria
 * @property string $nombre
 *
 * @property Ingredientes[] $ingredientes
 * @property Productos[] $productos
 */
class Categorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDcategoria', 'nombre'], 'required'],
            [['IDcategoria'], 'integer'],
            [['nombre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDcategoria' => Yii::t('app', 'Idcategoria'),
            'nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientes()
    {
        return $this->hasMany(Ingredientes::className(), ['IDcategoria' => 'IDcategoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['IDcategoria' => 'IDcategoria']);
    }
}
