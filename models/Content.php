<?php

namespace kouosl\content\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $date
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'date' => 'Date',
        ];
    }
}
