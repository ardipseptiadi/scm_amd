<?php
/* @var $this PeramalanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peramalan' => array('index'),
);

$this->menu=array(
	array('label'=>'Create Peramalan', 'url'=>array('create')),
	array('label'=>'Manage Peramalan', 'url'=>array('admin')),
);
?>

<!-- <h1>Agens</h1> -->


<div class="row-fluid text-center">
	<a href="<?php echo Yii::app()->createUrl('ppic/peramalan/create'); ?>" class="qck-button" rel="tooltip" title="Tambah Pemesanan"><i class="icon-user"></i></a>
	<a href="#" class="qck-button" rel="tooltip" title="Add News"><i class="icon-edit"></i></a>
	<a href="#" class="qck-button" rel="tooltip" title="Comment"><i class="icon-comment"></i></a>
	<a href="#" class="qck-button" rel="tooltip" title="Edit"><i class="icon-wrench"></i></a>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Data Peramalan</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
					'columns' => array(
						'id_produk',
						'bulan_mulai',
						'bulan_selesai',
						'bulan_peramalan',
						'jumlah_peramalan'
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
