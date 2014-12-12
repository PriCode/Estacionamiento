<?php
/* @var $this TipoVehiculoController */
/* @var $model TipoVehiculo */

$this->breadcrumbs=array(
	'Tipo Vehiculos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoVehiculo', 'url'=>array('index')),
	array('label'=>'Manage TipoVehiculo', 'url'=>array('admin')),
);
?>

<h1>Create TipoVehiculo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>