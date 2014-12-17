
	
	<?php echo TbHtml::lead('Simulacion'); ?>

    <?php echo TbHtml::inlineRadioButtonList('optionsRadios', '', array(
    'option1' => 'Sin tarjeta' ,
    'option2' => 'Con tarjeta',
    
    )); ?>
	<legend></legend>
    <?php 
    		$this->menu = array(						    
						        array('label' => 'Panel de Control'),
							    array('label' => 'Ingreso', 'url' => '#', 'active' => true),
							    array('label' => 'Salida', 'url' => '#'),    
							    array('label' => 'Configuraciones', 'url' => '#'),
							    TbHtml::menuDivider(),
							    array('label' => 'Ayuda', 'url' => '#'),
						    );    	 
	 ?>
   

    <?php echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_VERTICAL,'index.php?r=portero/Registro','POST', array('id'=>'fRegistro') ); ?>
    <fieldset>
	    <legend>Registro</legend>

	    <?php echo TbHtml::label('Placa', 'text'); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => 'ADR-345')); ?>
	    <?php echo TbHtml::label('Tiempo', 'text'); ?>	      		
			    <?php echo TbHtml::radioButtonList('optionsRadios', '', array(
			    'option1' => 'Horas' ,
			    'option2' => 'Libre',			    
			    )); ?>
	    <?php echo TbHtml::textField('text', '', array('placeholder' => 'x Horas')); ?>	    
	    <?php echo TbHtml::submitButton('Generar Tickect'); ?>

    </fieldset>
	<?php echo TbHtml::endForm(); ?>


	<?php if (isset( $rpta)) {
			echo $rpta;
	}
	
