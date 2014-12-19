    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=cliente/admin'),
<<<<<<< HEAD
	    array('label' => 'Tarifa', 'url' => '?r=administrador/gtarifas'),    
	    array('label' => 'Lotes', 'url' => '?r=parking/admin'),	    
=======
	    array('label' => 'Tarifa', 'url' => '?r=administrador/tarifa'),
	    array('label' => 'Lotes', 'url' => '?r=administrador/glotes'),	    
>>>>>>> 179b2b1d18ef30a12e3e10191ddfad957d32c0bf
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes','active' => true),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>


<legend>Reporte</legend>

	<h5>Mes </h5>
		<?php echo TbHtml::label('Desde:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

	    <?php echo TbHtml::label('Hasta:', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => '....')); ?>

