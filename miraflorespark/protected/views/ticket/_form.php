<?php
/* @var $this TicketController */
/* @var $model Ticket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ticket-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida'); ?>
		<?php echo $form->error($model,'hora_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_llegada'); ?>
		<?php echo $form->textField($model,'hora_llegada'); ?>
		<?php echo $form->error($model,'hora_llegada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_parking'); ?>
		<?php echo $form->textField($model,'id_parking'); ?>
		<?php echo $form->error($model,'id_parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_vehiculo'); ?>
		<?php echo $form->textField($model,'id_vehiculo'); ?>
		<?php echo $form->error($model,'id_vehiculo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->