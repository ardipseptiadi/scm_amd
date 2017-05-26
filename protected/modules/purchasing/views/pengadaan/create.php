<?php
/* @var $this PengadaanController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Pengadaan'=>array('index'),
	'Tambah',
);

// $this->menu=array(
// 	array('label'=>'List Agen', 'url'=>array('index')),
// 	array('label'=>'Manage Agen', 'url'=>array('admin')),
// );
?>

<!-- <h1>Tambah Agen</h1> -->

<?php $this->renderPartial('_form',get_defined_vars()); ?>
<?php Yii::app()->clientScript->registerScript('js_tambah_pengadaan','
$(".tgl_form").datepicker({
	orientation:"bottom",
	autoclose:true,
	format:"yyyy-mm-dd"
});
');
Yii::app()->clientScript->registerScript('formPengadaanDetail',

file_get_contents(__DIR__.'/pengadaan_cart.js'), CClientScript::POS_END);

?>
