<?php
/* @var $this ParkingController */
/* @var $model Parking */

$this->breadcrumbs=array(
	'Lotes'=>array('index'),
	$model->id_parking=>array('view','id'=>$model->id_parking),
	'Actualizar',
);

$this->menu2=array(
	array('label'=>'List Parking', 'url'=>array('index')),
	array('label'=>'Create Parking', 'url'=>array('create')),
	array('label'=>'View Parking', 'url'=>array('view', 'id'=>$model->id_parking)),
	array('label'=>'Manage Parking', 'url'=>array('admin')),
);
?>
<?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa'),	   
	    array('label' => 'Lotes', 'url' => '?r=parking/admin', 'active' => true),
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
  ?>
<h1>Update Parking <?php echo $model->id_parking; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>