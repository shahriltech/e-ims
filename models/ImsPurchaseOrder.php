<?php

namespace app\models;

use Yii;
use app\models\ImsProduct;
/**
 * This is the model class for table "ims_purchaseOrder".
 *
 * @property integer $ims_purchaseId
 * @property string $ims_purchaseDate
 * @property integer $ims_orderBy
 * @property integer $ims_productId
 * @property integer $ims_productQty
 * @property string $ims_productTotalprice
 */
class ImsPurchaseOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_purchaseOrder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_orderBy', 'ims_productId', 'ims_productQty','ims_supplierId'], 'integer'],
            [['ims_productQty'], 'required'],
            [['ims_productTotalprice'], 'number'],
            [['ims_purchaseDate'], 'string', 'max' => 50],
            [['ims_invoicePurchaseno'], 'string', 'max' => 20],
            [['ims_statusOrder'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ims_purchaseId' => 'Ims Purchase ID',
            'ims_purchaseDate' => 'Purchase Date',
            'ims_orderBy' => 'Order By',
            'ims_productId' => 'Product List',
            'ims_productQty' => 'Product Qty',
            'ims_productTotalprice' => 'Product Total Price',
            'ims_supplierId'=>'Supplier/Vendor Name',
            'ims_invoicePurchaseno' => 'Invoice Number',
            'ims_statusOrder'=>'Status Order',
        ];
    }
    public function getProductname()
    {
        return $this->hasOne(ImsProduct::className(), ['ims_productId' => 'ims_productId']);
    } 
    /*public function getProductdesc()
    {
        return $this->hasOne(ImsProduct::className(), ['ims_productId' => 'ims_productId']);
    }*/
}
