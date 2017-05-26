<?php
/* @var $this KaryawanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Karyawans',
);

$this->menu=array(
	array('label'=>'Create Karyawan', 'url'=>array('create')),
	array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Karyawans</h1>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-eye-open"></i> Tabel Karyawan</h3>
		</div>

		<div class="well no-padding">
			<?php $this->widget('AmidisGridView',array(
					'dataProvider' => $dataProvider,
			)); ?>
		</div>
	</div>
</div>
