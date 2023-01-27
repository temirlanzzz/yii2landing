<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Service".
 *
 * @property int $id
 * @property string $icon
 * @property string $titleru
 * @property string $titleen
 * @property string $titlekz
 * @property string $descriptionru
 * @property string $descriptionen
 * @property string $descriptionkz
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $iconImage;
    public static function tableName()
    {
        return 'Service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icon', 'titleru', 'titleen', 'titlekz', 'descriptionru', 'descriptionen', 'descriptionkz'], 'required'],
            [['icon', 'titleru', 'titleen', 'titlekz', 'descriptionru', 'descriptionen', 'descriptionkz'], 'string'],
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
            'icon' => 'Icon',
            'titleru' => 'Titleru',
            'titleen' => 'Titleen',
            'titlekz' => 'Titlekz',
            'descriptionru' => 'Descriptionru',
            'descriptionen' => 'Descriptionen',
            'descriptionkz' => 'Descriptionkz',
        ];
    }
}
