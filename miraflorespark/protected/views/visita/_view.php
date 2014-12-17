<?php
/* @var $this VisitaController */
/* @var $data Visita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_visita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_visita), array('view', 'id'=>$data->id_visita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_llegada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_llegada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->id_vehiculo); ?>
	<br />


</div>