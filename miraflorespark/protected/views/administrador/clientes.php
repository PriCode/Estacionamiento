
    <?php $this->menu=array(
	    array('label' => 'Panel de Control'),	    
	    array('label' => 'Contratos', 'url' => '?r=administrador/index'),
	    array('label' => 'Clientes', 'url' => '?r=administrador/gclientes','active' => true),
	    array('label' => 'Tarifa', 'url' => '?r=administrador/gtarifas'),    
	    array('label' => 'Lotes', 'url' => '?r=administrador/glotes'),	    
	    array('label' => 'Reportes', 'url' => '?r=administrador/greportes'),
	    TbHtml::menuDivider(),
	    array('label' => 'Ayuda', 'url' => '#'),
    	)
     ?>


