<?php
/* @var $this PerseidaanController */
/* @var $model Persedian */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-cog"></i> <?php echo $model->isNewRecord ? 'Tambah' : 'Ubah' ?> Data Pengiriman</h3>
		</div>

		<div class="well no-padding">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengiriman-form',
	'htmlOptions' => array(
		'class' => 'form-horizontal'
	),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id_pemesanan',['class'=>'control-label']); ?>
		<div class="controls">
			<?php
			echo $form->dropDownList($model, 'id_pemesanan', $list_pemesanan,array('class'=>'span6 m-wrap','empty'=>'(Pilih Pemesanan)'));?>
			<span class="help-inline"><?php echo $form->error($model,'id_pemesanan'); ?></span>
		</div>

	</div>

  <div class="control-group">
		<?php echo $form->labelEx($model,'id_kendaraan',['class'=>'control-label']); ?>
		<div class="controls">
			<?php
			echo $form->dropDownList($model, 'id_kendaraan', $list_kendaraan,array('class'=>'span6 m-wrap','empty'=>'(Pilih Kendaraan)'));?>
			<span class="help-inline"><?php echo $form->error($model,'id_kendaraan'); ?></span>
		</div>

	</div>

  <div class="control-group">
		<?php echo $form->labelEx($model,'id_karyawan',['class'=>'control-label']); ?>
		<div class="controls">
			<?php
			echo $form->dropDownList($model, 'id_karyawan', $list_karyawan,array('class'=>'span6 m-wrap','empty'=>'(Pilih Pengemudi)'));?>
			<span class="help-inline"><?php echo $form->error($model,'id_karyawan'); ?></span>
		</div>

	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'tgl_pengiriman',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'tgl_pengiriman',array('size'=>16,'maxlength'=>16,'class'=>'span6 m-wrap tgl_form')); ?>
		</div>
		<?php echo $form->error($model,'tgl_pengiriman'); ?>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',['class'=>'btn btn-primary']); ?>
		<?php echo CHtml::resetButton('Reset',['class'=>'btn']); ?>
	</div>

<?php $this->endWidget(); ?>
		</div>
	</div>
</div><!-- form -->
