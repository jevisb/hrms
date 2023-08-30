<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $userID
 * @property string $username
 * @property string $email
 * @property string|null $role
 *
 * @property Standardreports[] $standardreports
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['role'], 'string'],
            [['username', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userID' => 'User ID',
            'username' => 'Username',
            'email' => 'Email',
            'role' => 'Role',
        ];
    }

    /**
     * Gets query for [[Standardreports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStandardreports()
    {
        return $this->hasMany(Standardreports::class, ['createdBy' => 'userID']);
    }
}
