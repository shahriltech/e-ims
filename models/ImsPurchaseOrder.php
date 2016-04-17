<?php

namespace app\models;

use Yii;

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
            [['ims_orderBy', 'ims_productId', 'ims_productQty'], 'integer'],
            [['ims_productQty'], 'required'],
            [['ims_productTotalprice'], 'number'],
            [['ims_purchaseDate'], 'string', 'max' => 50],
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
            'ims_productId' => 'Product ID',
            'ims_productQty' => 'Product Qty',
            'ims_productTotalprice' => 'Product Total Price',
        ];
    }
}
