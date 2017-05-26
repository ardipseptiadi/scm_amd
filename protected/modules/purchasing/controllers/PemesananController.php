<?php

class PemesananController extends Controller
{
	public function init()
	{
		Yii::import('application.modules.admin.models.*');
	}
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','addCart','removeCart'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pemesanan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionCreate()
	{
		$model=new Pemesanan;

		$agen = Agen::model()->findAll(array('order' => 'nama'));
		$produk = Produk::model()->findAll(array('order' => 'jenis'));
    $list_agen = CHtml::listData($agen,'id_agen', 'nama');
    $list_produk = CHtml::listData($produk,'id_produk', 'jenis');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model->no_order = $model->generateNoOrder();
		$p_order = $model->no_order;
		if(isset($_POST['Pemesanan']))
		{
			$model->attributes=$_POST['Pemesanan'];
			if($model->save()){
				$data_detail = Yii::app()->session['cart'];
				foreach($data_detail as $detail){
					$p_detail = new PemesananDetail();
					$p_detail->id_pemesanan = $model->getPrimaryKey();
					$p_detail->id_produk = $detail["id_produk"];
					$p_detail->no_order = $p_order;
					$p_detail->qty = $detail["qty"];
					$p_detail->save();
				}
				unset(Yii::app()->session['cart']);
				$this->redirect(array('index'));
			}
		}
		if(!Yii::app()->session['cart']){
			Yii::app()->session['cart'] = [];
		}
		$dt =Yii::app()->session['cart'];
		// $datax = 1
		$cart = new CArrayDataProvider($dt,array(
							'keyField'=>'id'
						));
		$this->render('create',get_defined_vars());
	}

	public function actionView($id)
	{
		$criteria = new CDbCriteria();
		$criteria->select = 't.*';
		$criteria->addCondition('t.id_pemesanan = '.$id);

		$dataProvider=new CActiveDataProvider('PemesananDetail',array('criteria' => $criteria));
		$this->render('view',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function loadModel($id)
	{
		$model=Pemesanan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Agen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pemesanan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionAddCart()
	{
		$id_produk = Yii::app()->request->getPost('id_produk');
		$qty = Yii::app()->request->getPost('qty');
		$data = Yii::app()->session['cart'];
		if(count($data)<1){
			$id = 1;
		}else{
			$id = count($data) +1;
		}
		$prd = Produk::model()->findByPk($id_produk);
		array_push($data,['id'=>$id,'id_produk'=>$id_produk,'nama'=>$prd->jenis,'qty'=>$qty]);
		Yii::app()->session['cart'] = $data;

	}

	public function actionRemoveCart()
	{
		$id = Yii::app()->request->getPost('id');
		$id_produk = Yii::app()->request->getPost('id');
		$data = Yii::app()->session['cart'];
		unset($data[($id-1)]);
		Yii::app()->session['cart'] = $data;
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
