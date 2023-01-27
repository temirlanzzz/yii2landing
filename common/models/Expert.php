<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "expert".
 *
 * @property int $id
 * @property string $nameru
 * @property string $nameen
 * @property string $namekz
 * @property string $positionru
 * @property string $positionen
 * @property string $positionkz
 * @property string $img
 */
class Expert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $eventImage;
    public static function tableName()
    {
        return 'expert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nameru', 'nameen', 'namekz', 'positionru', 'positionen', 'positionkz', 'img'], 'required'],
            [['nameru', 'nameen', 'namekz', 'positionru', 'positionen', 'positionkz', 'img'], 'string'],
            [['eventImage'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameru' => 'Nameru',
            'nameen' => 'Nameen',
            'namekz' => 'Namekz',
            'positionru' => 'Positionru',
            'positionen' => 'Positionen',
            'positionkz' => 'Positionkz',
            'img' => 'Img',
        ];
    }
}
