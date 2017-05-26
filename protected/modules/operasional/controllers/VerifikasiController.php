<?php

class VerifikasiController extends Controller
{
	public function init()
	{
		Yii::app()->getModule('purchasing');
	}
	public function actionPemesanan()
	{
		$criteria = new CDbCriteria;
		$criteria->select = 't.id_agen,t.no_order,t.tanggal_pengiriman';
		$criteria->addCondition('t.is_verifikasi = 0');

		$dataProvider=new CActiveDataProvider('Pemesanan',['criteria' => $criteria]);
		$this->render('pemesanan',array(
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
