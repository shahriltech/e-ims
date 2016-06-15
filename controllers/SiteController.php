<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\ImsPurchaseOrder;
use app\models\ImsSupplier;
use app\models\ImsProduct;
use yii\data\ActiveDataProvider;
use kartik\mpdf\Pdf;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
               'only' => ['logout', 'invoice','vendorinvoice','index'],
                'rules' => [
                    [
                        'actions' => ['login','error','invoice','vendorinvoice'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout','index','invoice','vendorinvoice'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    
                ],
            ],

           /* 'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],*/
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $connection = \Yii::$app->db;
        $sql = $connection->createCommand('select sum(ims_productPrice * ims_totalProductQty) AS sum,sum(ims_totalProductQty) AS totalprod from ims_product');
        $model = $sql->queryAll();

        $sql1 = $connection->createCommand('select u.ims_fname,count(distinct p.ims_invoicePurchaseno) AS totalC,sum(p.ims_productTotalprice) AS sum 
from ims_purchaseOrder p
left join ims_user u on u.id = p.ims_orderBy
group by ims_orderBy');
        $model1 = $sql1->queryAll();

        $sql2 = $connection->createCommand('select count(distinct ims_invoicePurchaseno) AS totalApprove
from ims_purchaseOrder
where ims_statusOrder = "Approved"');

        $model2 = $sql2->queryAll();
        /*$model2 = ImsPurchaseOrder::find()
                ->where(['ims_statusOrder'=>'Approved'])
                ->count();     
*/
        $model4 = ImsPurchaseOrder::find()
                ->where(['ims_statusOrder'=>'Pending'])
                ->count();

        $sql2 = $connection->createCommand('SELECT c.ims_categoryName, SUM(i.ims_totalProductQty) AS total from ims_product i left join ims_category c on c.ims_categoryId = i.ims_categoryId group by ims_categoryName');
        $model3 = $sql2->queryAll();

        $model5 = ImsProduct::find()
                ->where(['<','ims_totalProductQty',5])
                ->count();
        $model6 = ImsProduct::find()
                ->orderBy([
                       'ims_productId' => SORT_DESC,
                    ])
                ->limit(3)
                ->all();
        return $this->render('index', [
            'model' => $model,
            'model2'=>$model2,
            'model1'=>$model1,
            'model3'=>$model3,
            'model4'=>$model4,
            'model5'=>$model5,
            'model6'=>$model6,
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionVendorinvoice($id){
       // $this->layout = false;
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

        $content = $this->renderPartial('invoice', [
            'model'=>$model,
            'model2'=>$model2,
                'model3' =>$model3,
            ]);

        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8,
            'content' => $content,
            'options' => ['title' => 'Invoice'],
            'methods' => [
                'SetHeader'=>['No. Invoice #'.$model->ims_invoicePurchaseno],
                'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        return $pdf->render();
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
}
