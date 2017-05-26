<?php
/* @var $this AgenController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Pemesanan'=>array('index'),
	'Tambah',
);

// $this->menu=array(
// 	array('label'=>'List Agen', 'url'=>array('index')),
// 	array('label'=>'Manage Agen', 'url'=>array('admin')),
// );
?>

<!-- <h1>Tambah Agen</h1> -->

<?php $this->renderPartial('_form',get_defined_vars()); ?>
<?php Yii::app()->clientScript->registerScript('js_tambah_pesanan','
$(".tgl_form").datepicker({
	orientation:"bottom",
	autoclose:true,
	format:"yyyy-mm-dd"
});
');
Yii::app()->clientScript->registerScript('formPemesananDetail',

file_get_contents(__DIR__.'/pemesanan_cart.js'), CClientScript::POS_END);

?>
