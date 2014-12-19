<?php
/* @var $this ParkingController */
/* @var $model Parking */

$this->breadcrumbs=array(
	'Lotes'=>array('index'),
	'Crear',
);

$this->menu2=array(
	array('label'=>'Listar Lotes', 'url'=>array('index')),
	array('label'=>'Gestionar Lotes', 'url'=>array('admin')),
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

<h1>Create Parking</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>