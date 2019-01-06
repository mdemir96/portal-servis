<?php

namespace kouosl\servis\models;

use Yii;

/**
 * This is the model class for table "Seferler".
 *
 * @property int $sefer_id
 * @property string $sefer_saati
 */
class Seferler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Seferler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sefer_saati'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sefer_id' => 'Sefer ID',
            'sefer_saati' => 'Sefer Saati',
        ];
    }
}
