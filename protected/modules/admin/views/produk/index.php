<?php
/* @var $this ProdukController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produks',
);

$this->menu=array(
	array('label'=>'Create Produk', 'url'=>array('create')),
	array('label'=>'Manage Produk', 'url'=>array('admin')),
);
?>

<h1>Produks</h1>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Tabel Produk</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
			)); ?>
		</div>
	</div>
</div>
