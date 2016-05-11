<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ims_receiveProduct".
 *
 * @property integer $id
 * @property integer $ims_productId
 * @property string $ims_receiveDate
 * @property integer $ims_invoiceNo
 * @property integer $ims_qtyRec
 * @property string $ims_totalPrice
 * @property string $ims_productDesc
 */
class ImsReceiveProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_receiveProduct';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ims_productId', 'ims_invoiceNo', 'ims_qtyRec','ims_receiveBy'], 'integer'],
            [['ims_totalPrice'], 'number'],
            [['ims_dateInvoice','ims_dateCreate'], 'string', 'max' => 50],
            [['ims_productDesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ims_productId' => 'Product Name',
            'ims_dateInvoice' => 'Invoice Date',
            'ims_invoiceNo' => 'Invoice No',
            'ims_qtyRec' => 'Item Quantity',
            'ims_totalPrice' => 'Price',
            'ims_productDesc' => 'Product Description',
            'ims_dateCreate' =>'Date Create'
        ];
    }
}
