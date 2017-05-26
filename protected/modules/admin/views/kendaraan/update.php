<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */

$this->breadcrumbs=array(
	'Kendaraans'=>array('index'),
	$model->id_kendaraan=>array('view','id'=>$model->id_kendaraan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kendaraan', 'url'=>array('index')),
	array('label'=>'Create Kendaraan', 'url'=>array('create')),
	array('label'=>'View Kendaraan', 'url'=>array('view', 'id'=>$model->id_kendaraan)),
	array('label'=>'Manage Kendaraan', 'url'=>array('admin')),
);
?>

<h1>Update Kendaraan <?php echo $model->id_kendaraan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>