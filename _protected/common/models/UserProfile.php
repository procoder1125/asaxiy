<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property int $id
 * @property string $first
 * @property string $last
 * @property string $phone
 * @property string $description
 * @property string $filename
 * @property string $course
 * @property int $user_id
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['first', 'last', 'phone', 'description', 'filename', 'course'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first' => 'First',
            'last' => 'Last',
            'phone' => 'Phone',
            'description' => 'Description',
            'filename' => 'Filename',
            'course' => 'Course',
            'user_id' => 'User ID',
        ];
    }
}
