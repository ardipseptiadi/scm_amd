<?php

class PengadaanController extends Controller
{
	public function init()
	{
		Yii::import('application.modules.admin.models.*');
	}
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Pengadaan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionCreate()
	{
		$model = new Pengadaan;

		$supplier = Supplier::model()->findAll(array('order' => 'nama'));
    $list_supplier = CHtml::listData($supplier,'id_supplier', 'nama');

		$material = Material::model()->findAll(array('order'=>'nama'));
    $list_material = CHtml::listData($material,'id_material', 'nama');

		if(isset($_POST['Pengadaan']))
		{

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
