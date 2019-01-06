<?php

namespace kouosl\servis\models;

use Yii;

/**
 * This is the model class for table "Durak".
 *
 * @property int $durak_id
 * @property string $durak_adi
 */
class Durak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Durak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['durak_adi'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'durak_id' => 'Durak ID',
            'durak_adi' => 'Durak Adi',
        ];
    }
}
