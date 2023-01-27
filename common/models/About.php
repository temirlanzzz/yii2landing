<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "About".
 *
 * @property int $id
 * @property string $descriptionru
 * @property string $descriptionen
 * @property string $descriptionkz
 * @property string $img
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $iconImage;
    public static function tableName()
    {
        return 'About';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descriptionru', 'descriptionen', 'descriptionkz', 'img'], 'required'],
            [['descriptionru', 'descriptionen', 'descriptionkz', 'img'], 'string'],
            [['iconImage'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descriptionru' => 'descriptionru',
            'descriptionen' => 'descriptionen',
            'descriptionkz' => 'descriptionkz',
            'img' => 'Img',
        ];
    }
}
