<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mailinglistmembers".
 *
 * @property int|null $listID
 * @property int|null $userID
 * @property string|null $addedAt
 */
class Mailinglistmembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mailinglistmembers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listID', 'userID'], 'integer'],
            [['addedAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listID' => 'List ID',
            'userID' => 'User ID',
            'addedAt' => 'Added At',
        ];
    }
}
