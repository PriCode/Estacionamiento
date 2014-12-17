<?php
/* @var $this TipoVehiculoController */
/* @var $data TipoVehiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tipo), array('view', 'id'=>$data->id_tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tipo); ?>
	<br />


</div>