<?php
/* @var $this TipoVehiculoController */
/* @var $model TipoVehiculo */

$this->breadcrumbs=array(
	'Tipo Vehiculos'=>array('index'),
	$model->id_tipo,
);

$this->menu=array(
	array('label'=>'List TipoVehiculo', 'url'=>array('index')),
	array('label'=>'Create TipoVehiculo', 'url'=>array('create')),
	array('label'=>'Update TipoVehiculo', 'url'=>array('update', 'id'=>$model->id_tipo)),
	array('label'=>'Delete TipoVehiculo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoVehiculo', 'url'=>array('admin')),
);
?>

<h1>View TipoVehiculo #<?php echo $model->id_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tipo',
		'nombre_tipo',
	),
)); ?>
