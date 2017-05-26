<?php
/* @var $this AgenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Verifikasi' => array('operasional/verifikasi'),
	'Pemesanan'
);

?>

<!-- <h1>Agens</h1> -->


<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Tabel Pemesanan</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
					'columns' => array(
						'no_order',
						'tanggal_pengiriman',
						array(
							'header' => 'Aksi',
							'name' => 'aksi',
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
