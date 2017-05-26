<?php
/* @var $this PersediaanController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Pengiriman'=>array('index'),
	'Tambah',
);

// $this->menu=array(
// 	array('label'=>'List Agen', 'url'=>array('index')),
// 	array('label'=>'Manage Agen', 'url'=>array('admin')),
// );
?>

<!-- <h1>Tambah Agen</h1> -->

<?php $this->renderPartial('_form',get_defined_vars()); ?>
<?php Yii::app()->clientScript->registerScript('js_tambah_pengiriman','
$(".tgl_form").datepicker({
	orientation:"bottom",
	format:"yyyy-mm-dd"
});
');
