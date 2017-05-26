<?php
/* @var $this AgenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengiriman' => array('index'),
);

$this->menu=array(
	array('label'=>'Create Pemesanan', 'url'=>array('create')),
	array('label'=>'Manage Pemesanan', 'url'=>array('admin')),
);
?>

<!-- <h1>Agens</h1> -->


<div class="row-fluid text-center">
	<a href="<?php echo Yii::app()->createUrl('gudang/pengiriman/create'); ?>" class="qck-button" rel="tooltip" title="Tambah Pengiriman"><i class="icon-plus"></i></a>

</div>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Data Pengiriman</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
					'columns' => array(
						array(
							'header' => 'No Order',
							'value' => '$data->pemesanan->no_order'
						),
						'tgl_pengiriman',
						array(
							'header' => 'Kendaraan',
							'name' => 'kendaraan',
							'value' => '$data->kendaraan->no_polisi'
						),
						array(
							'header' => 'Karyawan',
							'name' => 'karyawan',
							'value' => '$data->karyawan->nama'
						),
						array(
							'header' => 'Status',
							'name' => 'status',
							'value' => function ($data){
									switch($data->status){
											case 1 :
												$status = 'Dalam Pengiriman';
											break;
											case 2 :
												$status = 'Diterima';
											break;

											default:
												$status = 'Tidak Diketahui';
											break;
										}
									return $status;
								}
						),
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
