<?php

class PersediaanController extends Controller
{
	public function init()
	{
		Yii::app()->getModule('Admin');
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
				'actions'=>array('index','view','tambahStok','kurangStok','riwayat'),
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
		$dataProvider=new CActiveDataProvider('Persediaan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionTambahStok()
	{
		$model=new Persediaan;

		$material = Material::model()->findAll(array('order' => 'nama'));

    $list_material = CHtml::listData($material,'id_material', 'nama');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Persediaan']))
		{
			// $model->attributes=$_POST['Persediaan'];
			$model = Persediaan::model()->findByAttributes(array('id_material'=>$_POST['Persediaan']['id_material']));
			$stok_lama = $model->stok;
			$stok_baru = $_POST['Persediaan']['stok'];
			$model->stok = $stok_lama + $stok_baru;
			if($model->update())
				$riwayat = new RiwayatPersediaan();
				$riwayat->id_material = $_POST['Persediaan']['id_material'];
				$riwayat->stok = $_POST['Persediaan']['stok'];
				$riwayat->status = 1;
				$riwayat->tanggal = date("Y-m-d");
				$riwayat->created_at = date("Y-m-d h:i:s");
				if($riwayat->save())
					$this->redirect(array('index'));
		}

		$this->render('tambah',get_defined_vars());
	}

	public function actionKurangStok()
	{
		$model=new Persediaan;

		$material = Material::model()->findAll(array('order' => 'nama'));

    $list_material = CHtml::listData($material,'id_material', 'nama');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Persediaan']))
		{
			// $model->attributes=$_POST['Persediaan'];
			$model = Persediaan::model()->findByAttributes(array('id_material'=>$_POST['Persediaan']['id_material']));
			$stok_lama = $model->stok;
			$stok_baru = $_POST['Persediaan']['stok'];
			$model->stok = $stok_lama - $stok_baru;
			if($model->update())
				$riwayat = new RiwayatPersediaan();
				$riwayat->id_material = $_POST['Persediaan']['id_material'];
				$riwayat->stok = $_POST['Persediaan']['stok'];
				$riwayat->status = 2;
				$riwayat->tanggal = date("Y-m-d");
				$riwayat->created_at = date("Y-m-d h:i:s");
				if($riwayat->save())
					$this->redirect(array('index'));
		}

		$this->render('kurang',get_defined_vars());
	}

	public function actionRiwayat()
	{
		$dataProvider=new CActiveDataProvider('RiwayatPersediaan');
		$this->render('riwayat',array(
			'dataProvider'=>$dataProvider,
		));
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
