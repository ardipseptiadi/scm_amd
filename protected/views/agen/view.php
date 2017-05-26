<?php
/* @var $this AgenController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Agens'=>array('index'),
	$model->id_agen,
);

$this->menu=array(
	array('label'=>'List Agen', 'url'=>array('index')),
	array('label'=>'Create Agen', 'url'=>array('create')),
	array('label'=>'Update Agen', 'url'=>array('update', 'id'=>$model->id_agen)),
	array('label'=>'Delete Agen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_agen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Agen', 'url'=>array('admin')),
);
?>

<h1>View Agen #<?php echo $model->id_agen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_agen',
		'nama',
		'alamat',
		'telepon',
		'email',
		'status',
	),
)); ?>
