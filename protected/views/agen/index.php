<?php
/* @var $this AgenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agens',
);

$this->menu=array(
	array('label'=>'Create Agen', 'url'=>array('create')),
	array('label'=>'Manage Agen', 'url'=>array('admin')),
);
?>

<h1>Agens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
