<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "standardreports".
 *
 * @property int $reportID
 * @property string|null $reportName
 * @property string|null $description
 * @property string|null $createdAt
 * @property int|null $createdBy
 *
 * @property Users $createdBy0
 */
class Standardreports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'standardreports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['createdAt'], 'safe'],
            [['createdBy'], 'integer'],
            [['reportName'], 'string', 'max' => 255],
            [['createdBy'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['createdBy' => 'userID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reportID' => 'Report ID',
            'reportName' => 'Report Name',
            'description' => 'Description',
            'createdAt' => 'Created At',
            'createdBy' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy0()
    {
        return $this->hasOne(Users::class, ['userID' => 'createdBy']);
    }
}
