<?php
/* @var $this PengadaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengadaan' => array('index'),
);

$this->menu=array(
	array('label'=>'Create Pengadaan', 'url'=>array('create')),
	array('label'=>'Manage Pengadaan', 'url'=>array('admin')),
);
?>

<!-- <h1>Agens</h1> -->


<div class="row-fluid text-center">
	<a href="<?php echo Yii::app()->createUrl('purchasing/pengadaan/create'); ?>" class="qck-button" rel="tooltip" title="Tambah Pemesanan"><i class="icon-plus"></i></a>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Data Pengadaan</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
					'columns' => array(
						'no_pengadaan',
						// 'tanggal_pemesanan',
						// array(
						// 	'header' => 'Nama Agen',
						// 	'name' => 'agen',
						// 	'value' => '$data->agen->nama'
						// ),
						// array(
						// 	'header' => 'Aksi',
						// 	'class' => 'CButtonColumn',
						// 	'template' => '{view}',
						//
						// ),
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
