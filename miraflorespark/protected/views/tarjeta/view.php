<?php
/* @var $this TarjetaController */
/* @var $model Tarjeta */

$this->breadcrumbs=array(
	'Tarjetas'=>array('index'),
	$model->id_tarjeta,
);

$this->menu=array(
	array('label'=>'List Tarjeta', 'url'=>array('index')),
	array('label'=>'Create Tarjeta', 'url'=>array('create')),
	array('label'=>'Update Tarjeta', 'url'=>array('update', 'id'=>$model->id_tarjeta)),
	array('label'=>'Delete Tarjeta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tarjeta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarjeta', 'url'=>array('admin')),
);
?>

<h1>View Tarjeta #<?php echo $model->id_tarjeta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tarjeta',
		'placa',
	),
)); ?>
