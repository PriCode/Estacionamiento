<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cliente), array('view', 'id'=>$data->id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ape_materno')); ?>:</b>
	<?php echo CHtml::encode($data->ape_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ape_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->ape_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_persona')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />


</div>