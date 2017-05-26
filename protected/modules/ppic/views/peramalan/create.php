<?php
/* @var $this AgenController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Peramalaan'=>array('index'),
	'Tambah',
);

// $this->menu=array(
// 	array('label'=>'List Agen', 'url'=>array('index')),
// 	array('label'=>'Manage Agen', 'url'=>array('admin')),
// );
?>

<!-- <h1>Tambah Agen</h1> -->

<?php $this->renderPartial('_form',get_defined_vars()); ?>
<?php Yii::app()->clientScript->registerScript('js_tambah_peramalan','
$(".tgl_form").datepicker({
	orientation:"bottom",
  minViewMode: 1,
  format: "yyyy-mm",
  autoclose:true
});
');
