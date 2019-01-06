<?php

namespace kouosl\servis\models;

use Yii;

/**
 * This is the model class for table "ServisKayit".
 *
 * @property int $kayit_id
 */
class ServisKayit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ServisKayit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kayit_id' => 'Kayit ID',
        ];
    }
}
