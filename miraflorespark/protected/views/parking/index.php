<?php
/* @var $this ParkingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lotes',
);

$this->menu2=array(
	array('label'=>'Create Parking', 'url'=>array('create')),
	array('label'=>'Manage Parking', 'url'=>array('admin')),
);
?>
<?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin'),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/gtarifas'),    
	    array('label' => 'Lotes', 'url' => '?r=parking/admin', 'active' => true),
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
  ?>
<h1>Parkings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
