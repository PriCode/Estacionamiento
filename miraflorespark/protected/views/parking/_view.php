<?php
/* @var $this ParkingController */
/* @var $data Parking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parking')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_parking), array('view', 'id'=>$data->id_parking)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensor')); ?>:</b>
	<?php echo CHtml::encode($data->sensor); ?>
	<br />


</div>