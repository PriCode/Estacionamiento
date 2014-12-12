<?php
/* @var $this VisitaController */
/* @var $model Visita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_visita'); ?>
		<?php echo $form->textField($model,'id_visita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_llegada'); ?>
		<?php echo $form->textField($model,'hora_llegada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_vehiculo'); ?>
		<?php echo $form->textField($model,'id_vehiculo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->