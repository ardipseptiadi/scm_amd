<?php

class PengirimanController extends Controller
{
	public function init()
	{
		Yii::app()->getModule('admin');
		Yii::app()->getModule('purchasing');
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
				'actions'=>array('index','view'),
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
		$dataProvider=new CActiveDataProvider('Pengiriman');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionCreate()
	{
		$model=new Pengiriman;

		$pesanan = Pemesanan::model()->findAll();
		$kendaraan = Kendaraan::model()->findAll();
		$karyawan = Karyawan::model()->findAll();

		$list_pemesanan = CHtml::listData($pesanan,'id_pemesanan','no_order');
		$list_kendaraan = CHtml::listData($kendaraan,'id_kendaraan','no_polisi');
		$list_karyawan = CHtml::listData($karyawan,'id_karyawan','nama');

		$agen = Agen::model()->findAll(array('order' => 'nama'));

    $list_agen = CHtml::listData($agen,'id_agen', 'nama');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pengiriman']))
		{
			$model->attributes=$_POST['Pengiriman'];
			$model->status = 1;
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('create',get_defined_vars());
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
