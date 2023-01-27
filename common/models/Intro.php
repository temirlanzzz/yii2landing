<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "Intro".
 *
 * @property string $titleru
 * @property string $titlekz
 * @property string $titleen
 * @property string $descriptionru
 * @property string $descriptionkz
 * @property string $descriptionen
 * @property string $img
 * @property int $id
 */
class Intro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $eventImage;
    public static function tableName()
    {
        return 'Intro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titleru', 'titlekz', 'titleen', 'descriptionru', 'descriptionkz', 'descriptionen', 'img'], 'required'],
            [['titleru', 'titlekz', 'titleen', 'descriptionru', 'descriptionkz', 'descriptionen', 'img'], 'string'],
            [['eventImage'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'titleru' => 'Titleru',
            'titlekz' => 'Titlekz',
            'titleen' => 'Titleen',
            'descriptionru' => 'Descriptionru',
            'descriptionkz' => 'Descriptionkz',
            'descriptionen' => 'Descriptionen',
            'img' => 'Img',
            'id' => 'ID',
        ];
    }
}
