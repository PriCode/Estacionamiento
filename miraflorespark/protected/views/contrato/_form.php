<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_contrato'); ?>
		<?php echo $form->textField($model,'id_contrato'); ?>
		<?php echo $form->error($model,'id_contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_meses'); ?>
		<?php echo $form->textField($model,'cantidad_meses',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cantidad_meses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
		<?php echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tarifa'); ?>
		<?php echo $form->textField($model,'id_tarifa'); ?>
		<?php echo $form->error($model,'id_tarifa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tarjeta'); ?>
		<?php echo $form->textField($model,'id_tarjeta'); ?>
		<?php echo $form->error($model,'id_tarjeta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->