<?php
/* @var $this TipoVehiculoController */
/* @var $model TipoVehiculo */

$this->breadcrumbs=array(
	'Tipo Vehiculos'=>array('index'),
	$model->id_tipo=>array('view','id'=>$model->id_tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoVehiculo', 'url'=>array('index')),
	array('label'=>'Create TipoVehiculo', 'url'=>array('create')),
	array('label'=>'View TipoVehiculo', 'url'=>array('view', 'id'=>$model->id_tipo)),
	array('label'=>'Manage TipoVehiculo', 'url'=>array('admin')),
);
?>

<h1>Update TipoVehiculo <?php echo $model->id_tipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>