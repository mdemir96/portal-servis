<?php

namespace kouosl\servis\models;

use Yii;

/**
 * This is the model class for table "Servis".
 *
 * @property int $servis_id
 * @property string $iletisim
 */
class Servis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Servis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iletisim'], 'string', 'max' => 14],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'servis_id' => 'Servis ID',
            'iletisim' => 'Iletisim',
        ];
    }
}
