<?php
/* @var $this AgenController */
/* @var $model Agen */

$this->breadcrumbs=array(
	'Pemesanan'=>array('index'),
	// $model->id_detail_pemesanan,
);

// $this->menu=array(
// 	array('label'=>'List Agen', 'url'=>array('index')),
// 	array('label'=>'Create Agen', 'url'=>array('create')),
// 	array('label'=>'Update Agen', 'url'=>array('update', 'id'=>$model->id_agen)),
// 	array('label'=>'Delete Agen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_agen),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Agen', 'url'=>array('admin')),
// );
?>

<!-- <h1>Detail Agen <?php //echo $model->nama; ?></h1> -->

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
						array(
							'header' => 'Produk',
							'name' => 'produk',
							'value' => '$data->produk->jenis',
						),
            'harga',
            'qty',
            'jumlah'
					)
			)); ?>
		</div>
	</div>
</div>
