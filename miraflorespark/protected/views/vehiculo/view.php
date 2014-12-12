<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	$model->id_vehiculo,
);

$this->menu=array(
	array('label'=>'List Vehiculo', 'url'=>array('index')),
	array('label'=>'Create Vehiculo', 'url'=>array('create')),
	array('label'=>'Update Vehiculo', 'url'=>array('update', 'id'=>$model->id_vehiculo)),
	array('label'=>'Delete Vehiculo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vehiculo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehiculo', 'url'=>array('admin')),
);
?>

<h1>View Vehiculo #<?php echo $model->id_vehiculo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vehiculo',
		'placa',
		'color',
		'id_marca',
		'id_tipo',
		'id_conductor',
	),
)); ?>
