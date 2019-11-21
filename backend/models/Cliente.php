<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id_cliente
 * @property string $nome
 * @property string $morada
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'morada'], 'required'],
            [['nome', 'morada'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'nome' => 'Nome',
            'morada' => 'Morada',
        ];
    }
}
