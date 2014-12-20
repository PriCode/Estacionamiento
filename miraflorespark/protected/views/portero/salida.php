    <?php 
    		$this->menu = array(						    
						        array('label' => 'Panel de Control'),
							    array('label' => 'Ingreso', 'url' => '?r=vehiculo/create'),
							    array('label' => 'Salida', 'url' => '?r=portero/salida', 'active' => true),    
							    array('label' => 'Configuraciones', 'url' => '#'),
							    TbHtml::menuDivider(),
							    array('label' => 'Ayuda', 'url' => '#'),
						    );    	 
	 ?>
   

   <?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_VERTICAL,'index.php?r=portero/Registro','POST' ); ?>
    <fieldset>
	    <legend>Salida de Vehiculos</legend>
	    <?php echo TbHtml::label('Placa', 'text'); ?>
	    <?php echo TbHtml::textField('txtplaca', '', array('placeholder' => 'ADR-345')); ?>

				
	    <?/*php echo TbHtml::label('Tiempo', 'text'); */?>	
			    <?php /*echo TbHtml::radioButtonList('optionsRadios', '', array(
			    'option1' => 'Horas' ,
			    'option2' => 'Libre',			    
			    )); */?>

    
	    <?php echo TbHtml::submitButton('Generar Tickect'); ?>

    </fieldset>
	<?php echo TbHtml::endForm(); ?>


