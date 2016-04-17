<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ims_category".
 *
 * @property integer $kims_categoryId
 * @property string $kims_categoryName
 * @property string $kims_categoryDesc
 */
class ImsCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['ims_categoryName', 'required', 'message' => 'Please Fill Category Name'],
            [['ims_categoryName'], 'string', 'max' => 250],
            [['ims_categoryDesc'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ims_categoryId' => 'Category ID',
            'ims_categoryName' => 'Category Product',
            'ims_categoryDesc' => 'Category Description',
        ];
    }
}
