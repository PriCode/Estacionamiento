<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>'#',
	'Gestion',
);


$this->menu2=array(
	array('label'=>'Lista Completa', 'url'=>array('index')),
	array('label'=>'Nuevo Cliente', 'url'=>array('create')),		
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin', 'active' => true),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa'),
	    array('label' => 'Lotes', 'url' => '?r=parking/admin'),
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>

<h1>Gestion de Clientes</h1>
<h5>Clientes activos</h5>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_cliente',
		'nombre',
		'ape_materno',
		'ape_paterno',
		'tipo_persona',
		'direccion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
