<?php
/* @var $this AgenController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Agens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Agen', 'url'=>array('index')),
	array('label'=>'Manage Agen', 'url'=>array('admin')),
);
?>

<h1>Create Agen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>