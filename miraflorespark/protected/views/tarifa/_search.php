<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tarifa'); ?>
		<?php echo $form->textField($model,'id_tarifa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'por_minuto'); ?>
		<?php echo $form->textField($model,'por_minuto',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'por_mes'); ?>
		<?php echo $form->textField($model,'por_mes',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_cliente'); ?>
		<?php echo $form->textField($model,'tipo_cliente',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->