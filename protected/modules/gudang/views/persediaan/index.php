<?php
/* @var $this AgenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Persediaan' => array('index'),
);

$this->menu=array(
	array('label'=>'Create Persediaan', 'url'=>array('create')),
	array('label'=>'Manage Persediaan', 'url'=>array('admin')),
);
?>

<!-- <h1>Agens</h1> -->


<div class="row-fluid text-center">
	<a href="<?php echo Yii::app()->createUrl('gudang/persediaan/tambahStok'); ?>" class="qck-button" rel="tooltip" title="Tambah Persediaan"><i class="icon-plus"></i></a>
	<a href="<?php echo Yii::app()->createUrl('gudang/persediaan/kurangStok'); ?>" class="qck-button" rel="tooltip" title="Kurang Persediaan"><i class="icon-minus"></i></a>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Data Persediaan</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
					'columns' => array(
						array(
							'header' => 'Material',
							'name' => 'material',
							'value' => '$data->material->nama'
						),
						'stok',
						array(
							'header' => 'Safety Stok',
							'name' => 'safety',
							'value' => '!($data->safety)?"-":$data->safety->safety_stok'
						),
					)
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
