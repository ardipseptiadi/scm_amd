<?php

class PeramalanController extends Controller
{
	public function init()
	{
		Yii::app()->getModule('admin');
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
		$dataProvider=new CActiveDataProvider('Peramalan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionCreate()
	{
		$model=new Peramalan;

		$produk = Produk::model()->findAll(array('order' => 'jenis'));

    $list_produk = CHtml::listData($produk,'id_produk', 'jenis');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Peramalan']))
		{
			$post = $_POST['Peramalan'];
			$bulan_mulai = explode("-",$post['bulan_mulai']);
			$bulan_selesai = explode("-",$post['bulan_selesai']);
			$bulan_peramalan = explode("-",$post['bulan_peramalan']);
			$produk = $post['id_produk'];
			$res = $this->peramalan_produk($produk,$bulan_mulai,$bulan_selesai,$bulan_peramalan);
			if($res)
				$this->redirect(array('index'));

			// $model->attributes=$_POST['Peramalan'];
			// if($model->save())
		}

		$this->render('create',get_defined_vars());
	}

	private function peramalan_produk($produk,$mulai,$selesai,$bulan_ramal)
	{
		$mulai_y = $mulai[0];
		$mulai_m = $mulai[1];
		$selesai_y = $selesai[0];
		$selesai_m = $selesai[1];

		$criteria = new CDbCriteria();
		$criteria->join("LEFT JOIN am_pemesanan as psn ON psn.id_pemesanan = t.id_pemesanan");
		$criteria->addCondition("t.tanggal_pemesanan BETWEEN ");
		$datapemesanan = PemesananDetail::model()->findAll($criteria);
		//ambil data
		//single exponensial
		//mse
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
