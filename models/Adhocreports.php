<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adhocreports".
 *
 * @property int $reportID
 * @property string|null $customParameters
 * @property string|null $createdAt
 * @property int|null $createdBy
 */
class Adhocreports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adhocreports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customParameters'], 'string'],
            [['createdAt'], 'safe'],
            [['createdBy'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reportID' => 'Report ID',
            'customParameters' => 'Custom Parameters',
            'createdAt' => 'Created At',
            'createdBy' => 'Created By',
        ];
    }
}
