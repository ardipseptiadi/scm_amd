<?php
/* @var $this AgenController */
/* @var $model Agen */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-cog"></i> <?php echo $model->isNewRecord ? 'Tambah' : 'Ubah' ?> Data Agen</h3>
		</div>

		<div class="well no-padding">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agen-form',
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
		<?php echo $form->labelEx($model,'nama',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50,'class'=>'span6 m-wrap')); ?>
			<!-- <span class="help-inline">Some hint here</span> -->
		</div>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'alamat',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50,'class'=>'span6 m-wrap')); ?>
		</div>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'telepon',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'telepon',array('size'=>16,'maxlength'=>16,'class'=>'span6 m-wrap')); ?>
		</div>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'email',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50,'class'=>'span6 m-wrap')); ?>
		</div>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'status',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'status',['class' => 'span6 m-wrap']); ?>
		</div>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',['class'=>'btn btn-primary']); ?>
		<?php echo CHtml::resetButton('Reset',['class'=>'btn']); ?>
	</div>

<?php $this->endWidget(); ?>
		</div>
	</div>
</div><!-- form -->
