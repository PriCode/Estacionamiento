<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	$model->id_visita,
);

$this->menu=array(
	array('label'=>'List Visita', 'url'=>array('index')),
	array('label'=>'Create Visita', 'url'=>array('create')),
	array('label'=>'Update Visita', 'url'=>array('update', 'id'=>$model->id_visita)),
	array('label'=>'Delete Visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_visita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visita', 'url'=>array('admin')),
);
?>

<h1>View Visita #<?php echo $model->id_visita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_visita',
		'hora_llegada',
		'hora_salida',
		'monto',
		'id_vehiculo',
	),
)); ?>
