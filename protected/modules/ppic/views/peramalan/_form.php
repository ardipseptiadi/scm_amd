<?php
/* @var $this PeramalanController */
/* @var $model Peramalan */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-cog"></i> <?php echo $model->isNewRecord ? 'Tambah' : 'Ubah' ?> Data Peramalan</h3>
		</div>

		<div class="well no-padding">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pemesanan-form',
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
		<?php echo $form->labelEx($model,'id_produk',['class'=>'control-label']); ?>
		<div class="controls">
			<?php
			echo $form->dropDownList($model, 'id_produk', $list_produk,array('class'=>'span6 m-wrap'));?>
			<span class="help-inline"><?php echo $form->error($model,'id_produk'); ?></span>
		</div>

	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'bulan_mulai',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'bulan_mulai',array('size'=>16,'maxlength'=>16,'class'=>'span6 m-wrap tgl_form','readonly'=> 'true')); ?>
		</div>
		<?php echo $form->error($model,'bulan_mulai'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'bulan_selesai',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'bulan_selesai',array('size'=>50,'maxlength'=>50,'class'=>'span6 m-wrap tgl_form')); ?>
		</div>
		<?php echo $form->error($model,'bulan_selesai'); ?>
	</div>

  <div class="control-group">
		<?php echo $form->labelEx($model,'bulan_peramalan',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'bulan_peramalan',array('size'=>50,'maxlength'=>50,'class'=>'span6 m-wrap tgl_form')); ?>
		</div>
		<?php echo $form->error($model,'bulan_peramalan'); ?>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',['class'=>'btn btn-primary']); ?>
		<?php echo CHtml::resetButton('Reset',['class'=>'btn']); ?>
	</div>

<?php $this->endWidget(); ?>
		</div>
	</div>
</div><!-- form -->
