<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto_ingrediente".
 *
 * @property integer $IDproductoIngre
 * @property integer $IDproducto
 * @property integer $IDingrediente
 * @property integer $unidades
 *
 * @property Ingredientes $iDingrediente
 * @property Productos $iDproducto
 */
class ProductoIngrediente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto_ingrediente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDproductoIngre', 'IDproducto', 'IDingrediente', 'unidades'], 'required'],
            [['IDproductoIngre', 'IDproducto', 'IDingrediente', 'unidades'], 'integer'],
            [['IDingrediente'], 'exist', 'skipOnError' => true, 'targetClass' => Ingredientes::className(), 'targetAttribute' => ['IDingrediente' => 'IDingredientes']],
            [['IDproducto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['IDproducto' => 'IDproducto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDproductoIngre' => Yii::t('app', 'Idproducto Ingre'),
            'IDproducto' => Yii::t('app', 'Idproducto'),
            'IDingrediente' => Yii::t('app', 'Idingrediente'),
            'unidades' => Yii::t('app', 'Unidades'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDingrediente()
    {
        return $this->hasOne(Ingredientes::className(), ['IDingredientes' => 'IDingrediente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDproducto()
    {
        return $this->hasOne(Productos::className(), ['IDproducto' => 'IDproducto']);
    }
}
