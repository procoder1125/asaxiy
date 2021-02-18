<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nomzodlar".
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $address
 * @property string $countryOfOrigin
 * @property string $email
 * @property string $phone
 * @property int $age
 * @property int $hired
 * @property int $status
 */
class Nomzodlar extends \yii\db\ActiveRecord
{
    const STATUS_YANGI = 0;
    const STATUS_INT_BEL = 1;
    const STATUS_QAB_QILINGAN = 10;
    const STATUS_QAB_QILINMAGAN = 20;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nomzodlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lastname', 'address', 'email', 'phone', 'status'], 'required'],
            [['age', 'hired', 'status'], 'integer'],
            [['name', 'lastname', 'address', 'countryOfOrigin', 'email', 'phone'], 'string', 'max' => 255],
            ['description', 'fileinput', 'string'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'address' => 'Address',
            'countryOfOrigin' => 'Country Of Origin',
            'email' => 'Email',
            'phone' => 'Phone',
            'age' => 'Age',
            'hired' => 'Hired',
            'status' => 'Status',
        ];
    }
}
