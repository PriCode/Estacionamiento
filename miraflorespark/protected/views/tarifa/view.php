<?php
/* @var $this TarifaController */
/* @var $model Tarifa */

$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	$model->id_tarifa,
);

$this->menu=array(
	array('label'=>'List Tarifa', 'url'=>array('index')),
	array('label'=>'Create Tarifa', 'url'=>array('create')),
	array('label'=>'Update Tarifa', 'url'=>array('update', 'id'=>$model->id_tarifa)),
	array('label'=>'Delete Tarifa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tarifa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarifa', 'url'=>array('admin')),
);
?>

<h1>View Tarifa #<?php echo $model->id_tarifa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tarifa',
		'por_minuto',
		'por_mes',
		'tipo_cliente',
	),
)); ?>
