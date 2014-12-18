<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarifa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'por_minuto'); ?>
		<?php echo $form->textField($model,'por_minuto',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'por_minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'por_mes'); ?>
		<?php echo $form->textField($model,'por_mes',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'por_mes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_cliente'); ?>
		<?php echo $form->textField($model,'tipo_cliente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->