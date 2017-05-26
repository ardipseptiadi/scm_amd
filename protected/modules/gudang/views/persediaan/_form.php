<?php
/* @var $this PerseidaanController */
/* @var $model Persedian */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-cog"></i> <?php echo $model->isNewRecord ? 'Tambah' : 'Ubah' ?> Data Persediaan</h3>
		</div>

		<div class="well no-padding">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persediaan-form',
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
		<?php echo $form->labelEx($model,'id_material',['class'=>'control-label']); ?>
		<div class="controls">
			<?php
			echo $form->dropDownList($model, 'id_material', $list_material,array('class'=>'span6 m-wrap'));?>
			<span class="help-inline"><?php echo $form->error($model,'id_material'); ?></span>
		</div>

	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'stok',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'stok',array('size'=>16,'maxlength'=>16,'class'=>'span6 m-wrap')); ?>
		</div>
		<?php echo $form->error($model,'stok'); ?>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton('Simpan',['class'=>'btn btn-primary']); ?>
		<?php echo CHtml::resetButton('Reset',['class'=>'btn']); ?>
	</div>

<?php $this->endWidget(); ?>
		</div>
	</div>
</div><!-- form -->
