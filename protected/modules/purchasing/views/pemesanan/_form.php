<?php
/* @var $this AgenController */
/* @var $model Agen */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span12">
		<div class="top-bar">
			<h3><i class="icon-cog"></i> <?php echo $model->isNewRecord ? 'Tambah' : 'Ubah' ?> Data Pemesanan</h3>
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
		<?php echo $form->labelEx($model,'no_order',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'no_order',array('size'=>50,'maxlength'=>50,'class'=>'span4 m-wrap','readonly'=>'true')); ?>
			<!-- <span class="help-inline">Some hint here</span> -->
		</div>
		<?php echo $form->error($model,'no_order'); ?>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'id_agen',['class'=>'control-label']); ?>
		<div class="controls">
			<?php
			echo $form->dropDownList($model, 'id_agen', $list_agen,array(
																																	'empty'=>'(Pilih Agen)',
																																	'class'=>'span4 m-wrap'
																																));?>
			<span class="help-inline"><?php echo $form->error($model,'id_agen'); ?></span>
		</div>

	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model,'tanggal_pengiriman',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'tanggal_pengiriman',array('size'=>16,'maxlength'=>16,'class'=>'span2 m-wrap tgl_form','readonly'=> 'true')); ?>
		</div>
		<?php echo $form->error($model,'tanggal_pengiriman'); ?>
	</div>
	<?php
// echo $form->dropDownList($model, 'id_agen', $list_agen);
?>
	<div class="control-group">
		<?php echo $form->labelEx($model,'tanggal_pemesanan',['class'=>'control-label']); ?>
		<div class="controls">
			<?php echo $form->textField($model,'tanggal_pemesanan',array('size'=>50,'maxlength'=>50,'class'=>'span2 m-wrap tgl_form','readonly'=>'true')); ?>
		</div>
		<?php echo $form->error($model,'tanggal_pemesanan'); ?>
	</div>

	<div class="control-group">
		<div class="controls">
			<?php  echo CHtml::dropDownList('produk', 'data_p',
              $list_produk,
              array('empty' => '(Pilih Produk)',
										'class' => 'span2'
							)); ?>
			<?php echo CHtml::numberField('qty', '',
							 array('id'=>'qty',
							 			 'class'=>'span2',
							       'width'=>11,
							       'maxlength'=>11,
										 'placeholder'=>'Quantity',
									 )); ?>
			<?php echo CHtml::button('Tambah', array('class' => 'addCart')); ?>
		</div>
	</div>

	<div>
		<?php
			$this->widget('zii.widgets.grid.CGridView',array(
					'id' => 'cart-grid',
					'dataProvider' => $cart,
					'summaryText' => false,
					'columns' => array(
						array(
							'name' => 'Produk',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["nama"])'
						),
						array(
							'name' => 'Qty',
							'type' => 'raw',
							'value' => 'CHtml::encode($data["qty"])'
						),
						array(
							'header' => 'Aksi',
              'value' => '
                          CHtml::button("Hapus",
                              array(
                                  "id" => $data["id"],
                                  "onclick"=>"js:removecartitem(".
                                                                  $data["id"].",".
                                                                  $data["id_produk"].");",
                                  "class" => "btn btn-danger btn-xs",
                              )
                          );',
              'type' => 'raw',
						),
					),
			));
		?>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',['class'=>'btn btn-primary']); ?>
		<?php echo CHtml::resetButton('Reset',['class'=>'btn']); ?>
	</div>

<?php $this->endWidget(); ?>
		</div>
	</div>
</div><!-- form -->
