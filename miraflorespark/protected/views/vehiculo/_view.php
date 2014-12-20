<?php
/* @var $this VehiculoController */
/* @var $data Vehiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vehiculo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vehiculo), array('view', 'id'=>$data->id_vehiculo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::encode($data->placa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condicion')); ?>:</b>
	<?php echo CHtml::encode($data->condicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->id_tarjeta); ?>
	<br />


</div>