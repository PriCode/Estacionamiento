<?php
/* @var $this ParkingController */
/* @var $data Parking */
?>

<?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa'),	   
	    array('label' => 'Lotes', 'url' => '?r=parking/admin', 'active' => true),
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
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