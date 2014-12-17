<?php
/* @var $this TarifaController */
/* @var $data Tarifa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tarifa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tarifa), array('view', 'id'=>$data->id_tarifa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifa')); ?>:</b>
	<?php echo CHtml::encode($data->tarifa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo); ?>
	<br />


</div>