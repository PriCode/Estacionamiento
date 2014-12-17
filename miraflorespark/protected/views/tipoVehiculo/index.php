<?php
/* @var $this TipoVehiculoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Vehiculos',
);

$this->menu=array(
	array('label'=>'Create TipoVehiculo', 'url'=>array('create')),
	array('label'=>'Manage TipoVehiculo', 'url'=>array('admin')),
);
?>

<h1>Tipo Vehiculos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
