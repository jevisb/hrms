<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notifications".
 *
 * @property int $notificationID
 * @property string|null $content
 * @property string|null $type
 * @property string|null $status
 * @property string|null $sentAt
 * @property int|null $sentBy
 */
class Notifications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notifications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'type', 'status'], 'string'],
            [['sentAt'], 'safe'],
            [['sentBy'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'notificationID' => 'Notification ID',
            'content' => 'Content',
            'type' => 'Type',
            'status' => 'Status',
            'sentAt' => 'Sent At',
            'sentBy' => 'Sent By',
        ];
    }
}
