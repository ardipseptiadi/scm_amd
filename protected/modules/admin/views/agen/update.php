<?php
/* @var $this AgenController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Agens'=>array('index'),
	$model->id_agen=>array('view','id'=>$model->id_agen),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agen', 'url'=>array('index')),
	array('label'=>'Create Agen', 'url'=>array('create')),
	array('label'=>'View Agen', 'url'=>array('view', 'id'=>$model->id_agen)),
	array('label'=>'Manage Agen', 'url'=>array('admin')),
);
?>

<h1>Update Agen <?php echo $model->id_agen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>