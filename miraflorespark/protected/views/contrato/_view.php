<?php
/* @var $this ContratoController */
/* @var $data Contrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_contrato), array('view', 'id'=>$data->id_contrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_meses')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_meses); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tarifa')); ?>:</b>
	<?php echo CHtml::encode($data->id_tarifa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->id_tarjeta); ?>
	<br />


</div>