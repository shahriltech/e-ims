<?php

namespace app\models;

use Yii;
use app\models\ImsCategory;

/**
 * This is the model class for table "ims_product".
 *
 * @property integer $ims_productId
 * @property string $ims_productName
 * @property string $ims_productPrice
 * @property string $ims_productDesc
 * @property integer $ims_totalProductQty
 * @property integer $ims_categoryId
 * @property integer $ims_supplierId
 * @property string $ims_barcodeProduct
 */
class ImsProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_productPrice'], 'number'],
            [['ims_totalProductQty', 'ims_categoryId', 'ims_supplierId'], 'integer'],
            [['ims_productName', 'ims_productDesc'], 'string', 'max' => 250],
            [['ims_barcodeProduct','ims_dateCreate'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ims_productId' => 'Product ID',
            'ims_productName' => 'Product Name',
            'ims_productPrice' => 'Product Price (RM)',
            'ims_productDesc' => 'Product Description',
            'ims_totalProductQty' => 'Total Quantity',
            'ims_categoryId' => 'Category Product',
            'ims_supplierId' => 'Vendor',
            'ims_barcodeProduct' => 'Barcode Product',
            'ims_dateCreate'=>'Date Created',
        ];
    }
    public function getCategory()
    {
        return $this->hasOne(ImsCategory::className(),['ims_categoryId' =>'ims_categoryId']);
    }
}
