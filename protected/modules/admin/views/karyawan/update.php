<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	$model->id_karyawan=>array('view','id'=>$model->id_karyawan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Karyawan', 'url'=>array('index')),
	array('label'=>'Create Karyawan', 'url'=>array('create')),
	array('label'=>'View Karyawan', 'url'=>array('view', 'id'=>$model->id_karyawan)),
	array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Update Karyawan <?php echo $model->id_karyawan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>