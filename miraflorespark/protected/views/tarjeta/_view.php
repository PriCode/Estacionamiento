<?php
/* @var $this TarjetaController */
/* @var $data Tarjeta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tarjeta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tarjeta), array('view', 'id'=>$data->id_tarjeta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::encode($data->placa); ?>
	<br />


</div>