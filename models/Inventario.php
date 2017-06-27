<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventario".
 *
 * @property integer $IDinventario
 * @property integer $IDingrediente
 * @property integer $cantidad_restante
 *
 * @property Ingredientes $iDingrediente
 */
class Inventario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDinventario', 'IDingrediente', 'cantidad_restante'], 'required'],
            [['IDinventario', 'IDingrediente', 'cantidad_restante'], 'integer'],
            [['IDingrediente'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredientes::className(), 'targetAttribute' => ['IDingrediente' => 'IDingredientes']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDinventario' => Yii::t('app', 'Idinventario'),
            'IDingrediente' => Yii::t('app', 'Idingrediente'),
            'cantidad_restante' => Yii::t('app', 'Cantidad Restante'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDingrediente()
    {
        return $this->hasOne(Ingredientes::className(), ['IDingredientes' => 'IDingrediente']);
    }
}
