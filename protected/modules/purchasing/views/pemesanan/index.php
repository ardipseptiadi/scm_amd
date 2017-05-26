<?php
/* @var $this AgenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemesanan' => array('index'),
);

$this->menu=array(
	array('label'=>'Create Pemesanan', 'url'=>array('create')),
	array('label'=>'Manage Pemesanan', 'url'=>array('admin')),
);
?>

<!-- <h1>Agens</h1> -->


<div class="row-fluid text-center">
	<a href="<?php echo Yii::app()->createUrl('purchasing/pemesanan/create'); ?>" class="qck-button" rel="tooltip" title="Tambah Pemesanan"><i class="icon-plus"></i></a>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Data Pemesanan</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
					'columns' => array(
						'no_order',
						'tanggal_pemesanan',
						array(
							'header' => 'Nama Agen',
							'name' => 'agen',
							'value' => '$data->agen->nama'
						),
						array(
							'header' => 'Aksi',
							'class' => 'CButtonColumn',
							'template' => '{view}',

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
