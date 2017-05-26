<?php
/* @var $this ProdukController */
/* @var $data Produk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_produk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_produk), array('view', 'id'=>$data->id_produk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_produk')); ?>:</b>
	<?php echo CHtml::encode($data->kode_produk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />


</div>