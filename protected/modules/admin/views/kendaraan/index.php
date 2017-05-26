<?php
/* @var $this KendaraanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kendaraans',
);

$this->menu=array(
	array('label'=>'Create Kendaraan', 'url'=>array('create')),
	array('label'=>'Manage Kendaraan', 'url'=>array('admin')),
);
?>

<h1>Kendaraans</h1>

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
