<?php
/* @var $this ParkingController */
/* @var $model Parking */

$this->breadcrumbs=array(
	'Parkings'=>array('index'),
	$model->id_parking,
);

$this->menu=array(
	array('label'=>'List Parking', 'url'=>array('index')),
	array('label'=>'Create Parking', 'url'=>array('create')),
	array('label'=>'Update Parking', 'url'=>array('update', 'id'=>$model->id_parking)),
	array('label'=>'Delete Parking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_parking),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parking', 'url'=>array('admin')),
);
?>

<h1>View Parking #<?php echo $model->id_parking; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_parking',
		'codigo',
		'estado',
		'sensor',
	),
)); ?>
