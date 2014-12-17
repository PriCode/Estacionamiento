<?php
/* @var $this ConductorController */
/* @var $data Conductor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_conductor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_conductor), array('view', 'id'=>$data->id_conductor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DNI')); ?>:</b>
	<?php echo CHtml::encode($data->DNI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />


</div>