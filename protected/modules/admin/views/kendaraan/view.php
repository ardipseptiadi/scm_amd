<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */

$this->breadcrumbs=array(
	'Kendaraans'=>array('index'),
	$model->id_kendaraan,
);

$this->menu=array(
	array('label'=>'List Kendaraan', 'url'=>array('index')),
	array('label'=>'Create Kendaraan', 'url'=>array('create')),
	array('label'=>'Update Kendaraan', 'url'=>array('update', 'id'=>$model->id_kendaraan)),
	array('label'=>'Delete Kendaraan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kendaraan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kendaraan', 'url'=>array('admin')),
);
?>

<h1>View Kendaraan #<?php echo $model->id_kendaraan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kendaraan',
		'no_polisi',
		'jenis',
		'status',
	),
)); ?>
