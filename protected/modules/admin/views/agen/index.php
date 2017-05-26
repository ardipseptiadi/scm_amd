<?php
/* @var $this AgenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agens' => array('index'),
);

$this->menu=array(
	array('label'=>'Create Agen', 'url'=>array('create')),
	array('label'=>'Manage Agen', 'url'=>array('admin')),
);
?>

<!-- <h1>Agens</h1> -->


<div class="row-fluid text-center">
	<a href="<?php echo Yii::app()->createUrl('admin/agen/create'); ?>" class="qck-button" rel="tooltip" title="Tambah Agen"><i class="icon-user"></i></a>
	<a href="#" class="qck-button" rel="tooltip" title="Add News"><i class="icon-edit"></i></a>
	<a href="#" class="qck-button" rel="tooltip" title="Comment"><i class="icon-comment"></i></a>
	<a href="#" class="qck-button" rel="tooltip" title="Edit"><i class="icon-wrench"></i></a>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Tabel Agen</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
			)); ?>
		</div>
	</div>
</div>

<?php
// $this->widget('zii.widgets.CListView', array(
// 	'dataProvider'=>$dataProvider,
// 	'itemView'=>'_view',
// ));
?>
