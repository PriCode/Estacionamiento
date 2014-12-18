<?php
/* @var $this TarifaController */
/* @var $data Tarifa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tarifa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tarifa), array('view', 'id'=>$data->id_tarifa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('por_minuto')); ?>:</b>
	<?php echo CHtml::encode($data->por_minuto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('por_mes')); ?>:</b>
	<?php echo CHtml::encode($data->por_mes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_cliente); ?>
	<br />


</div>