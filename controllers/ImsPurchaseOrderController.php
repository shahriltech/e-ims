<?php

namespace app\controllers;

use Yii;
use app\models\ImsPurchaseOrder;
use app\models\ImsPurchaseOrderSearch;
use app\models\PendingPurchaseSearch;
use app\models\ImsSupplier;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\ImsProduct;
use yii\db\Command;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;

/**
 * ImsPurchaseOrderController implements the CRUD actions for ImsPurchaseOrder model.
 */
class ImsPurchaseOrderController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ImsPurchaseOrder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImsPurchaseOrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       // distinct 
        $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) FROM ims_purchaseOrder WHERE ims_orderBy = :ims_orderBy',
            [':ims_orderBy' => Yii::$app->user->identity->id])->queryScalar();

        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT distinct p.ims_invoicePurchaseno,p.ims_purchaseDate,i.ims_supplierName FROM ims_purchaseOrder p left join ims_supplier i on i.ims_supplierId = p.ims_supplierId WHERE ims_orderBy = :ims_orderBy order by ims_purchaseDate DESC',
            'params' => [':ims_orderBy' => Yii::$app->user->identity->id],
            'totalCount' => $totalCount,
            'key' => 'ims_invoicePurchaseno',
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => [
                    'ims_invoicePurchaseno',
                    'ims_purchaseDate',
                ]
            ]
        ]);

        $models = $dataProvider->getModels();

      /*  $query = 'select distinct ims_invoicePurchaseno,ims_purchaseDate,ims_supplierId
                from ims_purchaseOrder
                group by ims_invoicePurchaseno'; 
        $model3 = new SqlDataProvider([
            'query' => $query,
            'pagination' => ['pageSize'=>52],
        ]);*/
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider'=>$dataProvider,
        ]);
    }

    /**
     * Displays a single ImsPurchaseOrder model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ImsPurchaseOrder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ImsPurchaseOrder();
        $staffid = Yii::$app->user->identity->id;
        $connection = Yii::$app->db; 

        if ($model->load(Yii::$app->request->post())) {
            $count = count($_POST['ImsPurchaseOrder']['ims_productId']);
            //create invoice 
                $length = rand(7,7);
                $chars = array_merge(range(0,9));
                shuffle($chars);
                $number = implode(array_slice($chars, 0,$length));
                $model->ims_invoicePurchaseno = $number;
                //Yii::$app->formatter->locale = 'ms-MY'; 
                $model->ims_purchaseDate = Yii::$app->formatter->asDate('now', 'dd MMMM Y');

                //$model->ims_purchaseDate=date('d/m/Y');
                $model->ims_orderBy = $staffid;

            for ($i=0; $i <$count ; $i++) {
                $model2 = ImsProduct::find()
                        ->where(['ims_productId'=>$model->ims_productId[$i]])
                        ->one();

                $a = $model->ims_supplierId;
                $b = $model->ims_productId[$i];
                $qty = $model->ims_productQty[$i] * $model2->ims_productPrice;
                $d = $model->ims_invoicePurchaseno;
                $e = $model->ims_purchaseDate;
                $f = $model->ims_orderBy;
                $g = $model->ims_productQty[$i];
                $model->ims_productTotalprice = $qty;
                $h = $model->ims_productTotalprice;

                $connection->createCommand()->batchInsert('ims_purchaseOrder', ['ims_supplierId', 'ims_productId','ims_productQty','ims_productTotalprice','ims_orderBy','ims_purchaseDate','ims_invoicePurchaseno'], [
                            [$a, $b,$g,$h,$f,$e,$d],
                            ])->execute();
            }

            return $this->redirect(['ims-purchase-order/invoice','id'=>$model->ims_invoicePurchaseno]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionInvoice($id){
        $model = ImsPurchaseOrder::find() //retrieve data with specific data
                ->where(['ims_invoicePurchaseno'=>$id])
                ->one();
        $model2 = ImsSupplier::find()
                ->where(['ims_supplierId'=>$model->ims_supplierId])
                ->one();
        $model3 = new ActiveDataProvider([
            'query' => ImsPurchaseOrder::find()->where(['ims_invoicePurchaseno'=>$id]),
            'pagination' => ['pageSize'=>52],
        ]);
            return $this->render('invoice',[
                'model'=>$model,
                'model2'=>$model2,
                'model3' =>$model3,
            ]);
    }
    public function actionInvoice_1($id){
        $model = ImsPurchaseOrder::find() //retrieve data with specific data
                ->where(['ims_invoicePurchaseno'=>$id])
                ->one();
        $model2 = ImsSupplier::find()
                ->where(['ims_supplierId'=>$model->ims_supplierId])
                ->one();
        $model3 = new ActiveDataProvider([
            'query' => ImsPurchaseOrder::find()->where(['ims_invoicePurchaseno'=>$id]),
            'pagination' => ['pageSize'=>52],
        ]);
            return $this->render('invoice_1',[
                'model'=>$model,
                'model2'=>$model2,
                'model3' =>$model3,
            ]);
    }
    /**
     * Updates an existing ImsPurchaseOrder model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = ImsPurchaseOrder::find()
                ->where(['ims_invoicePurchaseno'=>$model->ims_invoicePurchaseno])
                ->one();
        if ($model->load(Yii::$app->request->post()) ) 
        {
            $model3 = ImsProduct::find()
                        ->where(['ims_productId'=>$model->ims_productId])
                        ->one();

            $qty = $model->ims_productQty * $model3->ims_productPrice;
            $model->ims_productTotalprice = $qty;
            
            if ($model->save()) {
                if (Yii::$app->user->identity->role == 1) {
                    return $this->redirect(['invoice_1', 'id' => $model2->ims_invoicePurchaseno]); //return to page admin invoice_1
                }
                else{
                    return $this->redirect(['invoice', 'id' => $model2->ims_invoicePurchaseno]); //return to page employee invoice
                }
            }
            
        } else {
            
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionConfirmdelete($id)
    {
        return $this->renderAjax('confirmdelete', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionSaveinvoice($id){
        $model = ImsPurchaseOrder::find()
                ->where(['ims_invoicePurchaseno'=>$id])
                ->all();
        $connection = Yii::$app->db;

        foreach ($model as $key => $value) {

            $value['ims_statusOrder'] = 'Pending';
            $value->save();
            
        }
            Yii::$app->getSession()->setFlash('save', 'Invoice Successfully Saved');
            return $this->redirect(['ims-purchase-order/create']);
    }

    public function actionNeworder(){
        $searchModel = new PendingPurchaseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       // distinct 
        $totalCount = Yii::$app->db->createCommand('SELECT COUNT(*) FROM ims_purchaseOrder WHERE ims_statusOrder = :ims_statusOrder',
            [':ims_statusOrder' => 'Pending'])->queryScalar();

        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT distinct p.ims_invoicePurchaseno,p.ims_purchaseDate,p.ims_statusOrder FROM ims_purchaseOrder p WHERE ims_statusOrder = :ims_statusOrder order by ims_purchaseDate DESC',
            'params' => [':ims_statusOrder' => 'Pending'],
            'totalCount' => $totalCount,
            'key' => 'ims_invoicePurchaseno',
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => [
                    'ims_invoicePurchaseno',
                    'ims_purchaseDate',
                ]
            ]
        ]);

        $models = $dataProvider->getModels();

        return $this->render('neworder', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionApprove($id){
        $model = ImsPurchaseOrder::find()
                ->where(['ims_invoicePurchaseno'=>$id])
                ->all();

        $count = ImsPurchaseOrder::find()
        ->where(['ims_invoicePurchaseno' => $id])
        ->count();

        $connection = Yii::$app->db;
        $i = 1;
        foreach ($model as $key => $value) {

            $value['ims_statusOrder'] = 'Approved';

            $value->save();
            $i++;
            
        }
        if ($i > $count ) {
            Yii::$app->getSession()->setFlash('submitted', 'Order Successfully');
            return $this->redirect(['ims-purchase-order/neworder']);
        }
        
            
    }
    /**
     * Deletes an existing ImsPurchaseOrder model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {   
        $model = $this->findModel($id);
        $take = $model->ims_invoicePurchaseno;

        $model2 = ImsPurchaseOrder::find()
                ->where(['ims_invoicePurchaseno'=>$take])
                ->one();
        if ($model->delete()) {
            return $this->redirect(['ims-purchase-order/invoice','id'=>$model2->ims_invoicePurchaseno]);
        }
        
    }

    public function actionCancelorder($id)
    {   
        $model2 = ImsPurchaseOrder::find()
                ->where(['ims_invoicePurchaseno'=>$id])
                ->all();

        ImsPurchaseOrder::deleteAll(['ims_invoicePurchaseno'=>$id]);
        Yii::$app->getSession()->setFlash('submitted', 'Cancel the order has been successfully');
            return $this->redirect(['ims-purchase-order/neworder']);
    
        
    }
    /**
     * Finds the ImsPurchaseOrder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ImsPurchaseOrder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ImsPurchaseOrder::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
