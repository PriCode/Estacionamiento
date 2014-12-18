<?php
/* @var $this ParkingController */
/* @var $model Parking */

$this->breadcrumbs=array(
	'Parkings'=>array('index'),
	$model->id_parking=>array('view','id'=>$model->id_parking),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parking', 'url'=>array('index')),
	array('label'=>'Create Parking', 'url'=>array('create')),
	array('label'=>'View Parking', 'url'=>array('view', 'id'=>$model->id_parking)),
	array('label'=>'Manage Parking', 'url'=>array('admin')),
);
?>

<h1>Update Parking <?php echo $model->id_parking; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>