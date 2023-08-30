<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mailinglists".
 *
 * @property int $listID
 * @property string|null $listName
 * @property string|null $description
 * @property string|null $createdAt
 * @property int|null $createdBy
 */
class Mailinglists extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mailinglists';
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
            [['listName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listID' => 'List ID',
            'listName' => 'List Name',
            'description' => 'Description',
            'createdAt' => 'Created At',
            'createdBy' => 'Created By',
        ];
    }
}
