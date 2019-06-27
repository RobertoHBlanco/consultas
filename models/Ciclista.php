<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciclista".
 *
 * @property int $dorsal
 * @property string $nombre
 * @property int $edad
 * @property string $nomequipo
 *
 * @property Equipo $nomequipo0
 * @property Etapa[] $etapas
 * @property Lleva[] $llevas
 * @property Puerto[] $puertos
 */
class Ciclista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciclista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dorsal', 'nombre', 'nomequipo'], 'required'],
            [['dorsal', 'edad'], 'integer'],
            [['nombre'], 'string', 'max' => 30],
            [['nomequipo'], 'string', 'max' => 25],
            [['dorsal'], 'unique'],
          
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dorsal' => 'Dorsal',
            'nombre' => 'Nombre',
            'edad' => 'Edad',
            'nomequipo' => 'Nomequipo',
        ];
    }

 
}
