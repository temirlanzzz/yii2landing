<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Team".
 *
 * @property int $id
 * @property string $text1ru
 * @property string $text1en
 * @property string $text1kz
 * @property string $text2ru
 * @property string $text2en
 * @property string $text2kz
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text1ru', 'text1en', 'text1kz'], 'required'],
            [['text1ru', 'text1en', 'text1kz', 'text2ru', 'text2en', 'text2kz'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text1ru' => 'Text1ru',
            'text1en' => 'Text1en',
            'text1kz' => 'Text1kz',
            'text2ru' => 'Text2ru (Optional)',
            'text2en' => 'Text2en (Optional)',
            'text2kz' => 'Text2kz (Optional)',
        ];
    }
}
