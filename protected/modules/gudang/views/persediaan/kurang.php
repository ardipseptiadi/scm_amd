<?php
/* @var $this PersediaanController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Persediaan'=>array('index'),
	'Kurang',
);

// $this->menu=array(
// 	array('label'=>'List Agen', 'url'=>array('index')),
// 	array('label'=>'Manage Agen', 'url'=>array('admin')),
// );
?>

<!-- <h1>Tambah Agen</h1> -->

<?php $this->renderPartial('_form',get_defined_vars()); ?>
<?php Yii::app()->clientScript->registerScript('js_kurang_persediaan','
$(".tgl_form").datepicker({
	orientation:"bottom",
});
');
